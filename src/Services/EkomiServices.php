<?php

namespace EkomiFeedback\Services;

use EkomiFeedback\Helper\EkomiHelper;
use EkomiFeedback\Helper\ConfigHelper;
use EkomiFeedback\Repositories\OrderRepository;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiServices
 */
class EkomiServices {

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
     * The SRR URL for Customer segments.
     */
    const URL_UPDATE_CUSTOMER_SEGMENT = 'https://srr.ekomi.com/api/v1/customer-segments';

	/**
	 * The SRR URL to update the Smart Check Settings.
	 */
	const URL_SMART_CHECK_SETTINGS = 'https://srr.ekomi.com/api/v1/shops/setting';

	/**
	 * Product Identifiers.
	 */
	const PRODUCT_IDENTIFIER_ID  = 'id';
	const PRODUCT_IDENTIFIER_SKU = 'sku';

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
	public function __construct( ConfigHelper $configHelper, OrderRepository $orderRepo, EkomiHelper $ekomiHelper ) {
		$this->configHelper      = $configHelper;
		$this->ekomiHelper       = $ekomiHelper;
		$this->orderRepository   = $orderRepo;
	}

	/**
	 * Validates the shop.
	 *
	 * @return boolean True if validated False otherwise.
	 */
	public function validateShop() {
		$apiUrl = self::URL_GET_SETTINGS;
		$apiUrl .= "?auth={$this->configHelper->getShopId()}|{$this->configHelper->getShopSecret()}";
		$apiUrl .= '&version=cust-1.0.0&type=request&charset=iso';

		$response = $this->doCurl($apiUrl, 'GET');

		if ( $response == 'Access denied' ) {
			$this->getLogger( __FUNCTION__ )->error( 'invalid credentials', "url:{$apiUrl}" );
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Updates the smart check in SRR.
	 */
	public function updateSmartCheck()
	{
		$httpHeader = array(
			'shop-id: ' . $this->configHelper->getShopId(),
			'interface-password: ' . $this->configHelper->getShopSecret()
		);
		$smartCheck = false;
		if ($this->configHelper->getSmartCheck() == 'true' || $this->configHelper->getSmartCheck() == '1' ){
            $smartCheck = true;
        }

		$postFields = json_encode(array('smartcheck_on' => $smartCheck));

		$this->doCurl(self::URL_SMART_CHECK_SETTINGS, 'PUT', $httpHeader, $postFields);
    }

	/**
	 * Sends orders data to eKomi System.
	 */
	public function sendOrdersData() {

		if ( $this->configHelper->getEnabled() == 'true' ) {
			if ( $this->validateShop() ) {
                $this->updateSmartCheck();
			    $this->enableDefaultCustomerSegment();
				$orderStatuses  = $this->configHelper->getOrderStatus();
				$referrerIds    = $this->configHelper->getReferrerIds();
				$plentyIDs      = $this->configHelper->getPlentyIDs();
				$turnaroundTime = $this->configHelper->getTurnaroundTime();
				$updatedAtFrom  = date( 'Y-m-d\TH:i:s+00:00', strtotime( "-{$turnaroundTime} day" ) );
				$updatedAtTo    = date( 'Y-m-d\TH:i:s+00:00' );
				$pageNum        = 1;
				$filters        = [ 'updatedAtFrom' => $updatedAtFrom, 'updatedAtTo' => $updatedAtTo ];
				$fetchOrders    = true;
				while ( $fetchOrders ) {
					$orders = $this->orderRepository->getOrders( $pageNum, $filters );
					$this->getLogger( __FUNCTION__ )->error( 'orders-count-page-' . $pageNum, 'count:' . count( $orders ) );
					if ( $orders && count( $orders ) > 0 ) {
						foreach ( $orders as $key => $order ) {
							$orderId    = $order['id'];
							$plentyID   = $order['plentyId'];
							$referrerId = $order['orderItems'][0]['referrerId'];
							if ( ! $plentyIDs || in_array( $plentyID, $plentyIDs ) ) {
								if ( ! empty( $referrerIds ) && in_array( (string) $referrerId, $referrerIds ) ) {
									$this->getLogger( __FUNCTION__ )->error(
										"OrderID:{$orderId} ,referrerID:{$referrerId}|Blocked",
										'OrderID:' . $orderId .
										'|ReferrerID:' . $referrerId .
										' Blocked in plugin configuration.'
									);
									continue;
								}
								if ( in_array( $order['statusId'], $orderStatuses ) ) {
									$postVars = $this->ekomiHelper->preparePostVars( $order );
									$this->sendData($postVars);
								}
							} else {
								$this->getLogger( __FUNCTION__ )->error( 'PlentyID not matched', 'plentyID(' . $plentyID . ') not matched with PlentyIDs:' . implode( ',', $plentyIDs ) );
							}
						}
					} else {
						$fetchOrders = false;
					}
					$pageNum = $pageNum + 1;
				}
			} else {
				$this->getLogger( __FUNCTION__ )->error( 'invalid credentials', "shopId:{$this->configHelper->getShopId()},shopSecret:{$this->configHelper->getShopSecret()}" );
			}
		} else {
			$this->getLogger( __FUNCTION__ )->error( 'Plugin not active', 'is_active:' . $this->configHelper->getEnabled() );
		}
	}

    /**
     * Enables default customer segment in SRR.
     *
     * @return void
     */
    public function enableDefaultCustomerSegment()
    {
        $httpHeader = array(
            'shop-id: ' . $this->configHelper->getShopId(),
            'interface-password: ' . $this->configHelper->getShopSecret()
        );
        $apiUrl   = self::URL_UPDATE_CUSTOMER_SEGMENT . '?api_key=enable&records_per_page=30';
        $response = $this->doCurl($apiUrl, 'GET', $httpHeader, '');
        $segments = json_decode($response);
        foreach ($segments->data as $key => $segment) {
            if ($segment->name == 'Reviews') {
                $apiUrl   = self::URL_UPDATE_CUSTOMER_SEGMENT . "/{$segment->id}?status=active";
                $response = $this->doCurl($apiUrl, 'PUT', $httpHeader, '');
                $this->getLogger(__FUNCTION__ )->error( 'Customer-segment-status', $response);
                break;
            }
        }
    }

	/**
	 * Sends Order data to eKomi Plugins dashboard.
	 *
	 * @param array $orderData
	 *
	 * @return mixed|string
	 * @throws Exception
	 */
	public function sendData($orderData)
	{
		$response = '';
		if (!empty($orderData)) {
            $boundary   = md5(time());
            $header     = array('ContentType:multipart/form-data;boundary=' . $boundary);
            $postFields = json_encode($orderData);

			$response = $this->doCurl(self::URL_TO_SEND_DATA, "PUT", $header, $postFields);
        }
		return $response;
	}

	/**
	 * Makes a curl request.
	 *
	 * @param string $requestUrl  Api End point url.
	 * @param string $requestType Api Request type.
	 * @param array  $httpHeader  Header.
	 * @param string $postFields  The post data to send.
	 *
	 * @return mixed|string
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
			$this->getLogger( __FUNCTION__ )->error( "exception", $exception->getMessage() );

			return $exception->getMessage();
		}
	}

}