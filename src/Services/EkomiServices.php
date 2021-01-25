<?php

namespace EkomiFeedback\Services;

use EkomiFeedback\Helper\EkomiHelper;
use EkomiFeedback\Helper\ConfigHelper;
use EkomiFeedback\Repositories\OrderRepository;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiServices.
 */
class EkomiServices
{
    use Loggable;

    /**
     * The Url to validate shop.
     */
    const URL_GET_SETTINGS = 'http://api.ekomi.de/v3/getSettings';

    /**
     * The URL where the order data is sent.
     */
    const URL_TO_SEND_DATA = 'https://plugins-dashboard.ekomiapps.de/api/v1/order';

    /**
     * Request methods.
     */
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_PUT = 'PUT';

    /**
     * Error code types.
     */
    const ERROR_CODE_EXCEPTION = 'exception';
    const ERROR_CODE_INVALID = 'Invalid Credentials';
    const ERROR_CODE_PD_RESPONSE = 'PD-Response';
    const ERROR_CODE_PLENTY_NOT_MATCHED = 'Plenty ID not matched';
    const ERROR_CODE_PLUGIN_DISABLED = 'Plugin is not activated';
    const ERROR_CODE_ORDER_DATA = 'OrderData';
    const ERROR_CODE_POST_FIELDS = 'PostFields';

    /**
     * Static values.
     */
    const SERVER_OUTPUT = 'Access denied';
    const PAGE_NUMBER = 1;

    /**
     * @var ConfigRepository
     */
    private $configHelper;
    private $ekomiHelper;
    private $orderRepository;

    /**
     * EkomiServices constructor.
     *
     * @param ConfigHelper    $configHelper
     * @param OrderRepository $orderRepo
     * @param EkomiHelper     $ekomiHelper
     */
    public function __construct(ConfigHelper $configHelper, OrderRepository $orderRepo, EkomiHelper $ekomiHelper)
    {
        $this->configHelper = $configHelper;
        $this->ekomiHelper = $ekomiHelper;
        $this->orderRepository = $orderRepo;
    }

    /**
     * Sends orders data to eKomi System.
     */
    public function sendOrdersData()
    {
        if (ConfigHelper::CONFIG_ENABLE_TRUE !== $this->configHelper->getEnabled()) {
            $additionalInfo = 'is_active:'.$this->configHelper->getEnabled();
            $this->getLogger(__FUNCTION__)->error(self::ERROR_CODE_PLUGIN_DISABLED, $additionalInfo);
        }

        if (!$this->validateShop()) {
            $additionalInfo = "shopId:{$this->configHelper->getShopId()},shopSecret:{$this->configHelper->getShopSecret()}";
            $this->getLogger(__FUNCTION__)->error(self::ERROR_CODE_INVALID, $additionalInfo);
        }

        $orderStatuses = $this->configHelper->getOrderStatus();
        $referrerIds = $this->configHelper->getReferrerIds();
        $plentyIDs = $this->configHelper->getPlentyIDs();
        $turnaroundTime = $this->configHelper->getTurnaroundTime();
        $filters = $this->ekomiHelper->prepareFilter($turnaroundTime);
        $pageNum = self::PAGE_NUMBER;
        $fetchOrders = true;
        while ($fetchOrders) {
            $orders = $this->orderRepository->getOrders($pageNum, $filters);
            $this->getLogger(__FUNCTION__)->info('orders-count-page-'.$pageNum, 'count:'.count($orders));
            if ($orders && count($orders) > ConfigHelper::VALUE_NO) {
                foreach ($orders as $key => $order) {
                    $this->exportOrder($order, $orderStatuses, $referrerIds, $plentyIDs);
                }
            } else {
                $fetchOrders = false;
            }

            $pageNum = $pageNum + 1;
        }
    }

    /**
     * Validates the shop.
     *
     * @return bool true if validated False otherwise
     */
    public function validateShop()
    {
        $apiUrl = self::URL_GET_SETTINGS;
        $apiUrl .= "?auth={$this->configHelper->getShopId()}|{$this->configHelper->getShopSecret()}";
        $apiUrl .= '&version=cust-1.0.0&type=request&charset=iso';

        $response = $this->doCurl($apiUrl, self::REQUEST_METHOD_GET);
        if (self::SERVER_OUTPUT == $response) {
            $this->getLogger(__FUNCTION__)->error(self::ERROR_CODE_INVALID, "url:{$apiUrl}");

            return false;
        } else {
            return true;
        }
    }

    /**
     * Makes a curl request.
     *
     * @param string $requestUrl  api End point url
     * @param string $requestType api Request type
     * @param array  $httpHeader  header
     * @param string $postFields  the post data to send
     *
     * @return string
     */
    public function doCurl($requestUrl, $requestType, $httpHeader = array(), $postFields = '')
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $requestUrl);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestType);
            if (!empty($httpHeader)) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeader);
            }

            if (!empty($postFields)) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            }

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        } catch (\Exception $exception) {
            $this->getLogger(__FUNCTION__)->error(self::ERROR_CODE_EXCEPTION, $exception->getMessage());

            return $exception->getMessage();
        }
    }

    /**
     * Exports order data.
     *
     * @param array  $order
     * @param array  $orderStatuses
     * @param string $referrerIds
     * @param array  $plentyIDs
     */
    public function exportOrder($order, $orderStatuses, $referrerIds, $plentyIDs)
    {
        $orderId = $order['id'];
        $plentyID = $order['plentyId'];
        $referrerId = $order['referrerId'];
        if (!$plentyIDs || in_array($plentyID, $plentyIDs)) {
            if (!empty($referrerIds) && in_array((string) $referrerId, $referrerIds)) {
                $this->getLogger(__FUNCTION__)->error(
                    "OrderID:{$orderId} ,referrerID:{$referrerId}|Blocked",
                    'OrderID:'.$orderId.
                    '|ReferrerID:'.$referrerId.
                    ' Blocked in plugin configuration.'
                );
            } else {
                if (in_array($order['statusId'], $orderStatuses)) {
                    $postVars = $this->ekomiHelper->preparePostVars($order);
                    $this->sendData($postVars, $orderId);
                }
            }
        } else {
            $additionalInfo = 'plentyID('.$plentyID.') not matched with PlentyIDs:'.implode(',', $plentyIDs);
            $this->getLogger(__FUNCTION__)->error(self::ERROR_CODE_PLENTY_NOT_MATCHED, $additionalInfo);
        }
    }

    /**
     * Sends Order data to eKomi Plugins dashboard.
     *
     * @param array $orderData
     * @param int   $orderId
     *
     * @return string
     *
     * @throws Exception
     */
    public function sendData($orderData, $orderId)
    {
        $response = '';
        if (!empty($orderData)) {
            $boundary = md5(time());
            $header = array('ContentType:multipart/form-data;boundary='.$boundary);
            $postFields = json_encode($orderData);
            $response = $this->doCurl(self::URL_TO_SEND_DATA, self::REQUEST_METHOD_PUT, $header, $postFields);
            $this->getLogger(__FUNCTION__)->info("OrderId:{$orderId}|".self::ERROR_CODE_PD_RESPONSE, $response);
        }

        return $response;
    }
}
