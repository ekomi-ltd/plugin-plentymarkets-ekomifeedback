<?php

namespace EkomiFeedback\Services;

use EkomiFeedback\Helper\EkomiHelper;
use EkomiFeedback\Helper\ConfigHelper;
use EkomiFeedback\Repositories\OrderRepository;
use EkomiFeedback\Repositories\ReviewsRepository;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiServices
 */
class EkomiServices {

    use Loggable;

    /**
     * @var ConfigRepository
     */
    private $configHelper;
    private $ekomiHelper;
    private $orderRepository;
    private $reviewsRepository;

    public function __construct(ConfigHelper $configHelper, OrderRepository $orderRepo, ReviewsRepository $ekomiReviewsRepo, EkomiHelper $ekomiHelper) {
        $this->configHelper = $configHelper;
        $this->ekomiHelper = $ekomiHelper;
        $this->orderRepository = $orderRepo;
        $this->reviewsRepository = $ekomiReviewsRepo;
    }

    /**
     * Validates the shop
     * 
     * @return boolean True if validated False otherwise
     */
    public function validateShop() {
        $ApiUrl = 'http://api.ekomi.de/v3/getSettings';

        $ApiUrl .= "?auth={$this->configHelper->getShopId()}|{$this->configHelper->getShopSecret()}";
        $ApiUrl .= '&version=cust-1.0.0&type=request&charset=iso';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ApiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);

        if ($server_output == 'Access denied') {
            $this->getLogger(__FUNCTION__)->error('invalid credentials', "url:{$ApiUrl}");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * Sends orders data to eKomi System
     */
     public function sendOrdersData() {
    	
        if ($this->configHelper->getEnabled() == 'true') {
            if ($this->validateShop()) {

                $orderStatuses = $this->configHelper->getOrderStatus();
                $referrerIds   = $this->configHelper->getReferrerIds();
                $plentyIDs     = $this->configHelper->getPlentyIDs();
                $turnaroundTime = $this->configHelper->getTurnaroundTime();

                $updatedAtFrom = date('Y-m-d\TH:i:s',strtotime("-{$turnaroundTime} day"));
                $updatedAtTo = date('Y-m-d\TH:i:s');

                $pageNum =1;
                $filters = ['updatedAtFrom'=>$updatedAtFrom,'updatedAtTo'=>$updatedAtTo];

                $fetchOrders = true;

                while($fetchOrders) {
                    $orders = $this->orderRepository->getOrders($pageNum, $filters);

                    $this->getLogger(__FUNCTION__)->error('orders-count-page-' . $pageNum, 'count:' . count($orders));

                    if ($orders && !empty($orders)) {
                        foreach ($orders as $key => $order) {
                            $orderId = $order['id'];
                            $plentyID = $order['plentyId'];
                            $referrerId = $order['orderItems'][0]['referrerId'];

                            if (!$plentyIDs || in_array($plentyID, $plentyIDs)) {

                                if (!empty($referrerIds) && in_array((string)$referrerId, $referrerIds)) {
                                    $this->getLogger(__FUNCTION__)->error(
                                        "OrderID:{$orderId} ,referrerID:{$referrerId}|Blocked",
                                        'OrderID:' . $orderId .
                                        '|ReferrerID:' . $referrerId .
                                        ' Blocked in plugin configuration.'
                                    );
                                    continue;
                                }
                                if (in_array($order['statusId'], $orderStatuses)) {

                                    $postVars = $this->ekomiHelper->preparePostVars($order);
                                    // sends order data to eKomi
                                    $this->addRecipient($postVars, $orderId);
                                }
                            } else {
                                $this->getLogger(__FUNCTION__)->error('PlentyID not matched', 'plentyID(' . $plentyID . ') not matched with PlentyIDs:' . implode(',', $plentyIDs));
                            }
                        }
                    } else{
                        $fetchOrders = false;
                    }

                    $pageNum = $pageNum + 1;
                }
            } else {
                $this->getLogger(__FUNCTION__)->error('invalid credentials', "shopId:{$this->configHelper->getShopId()},shopSecret:{$this->configHelper->getShopSecret()}");
            }
        } else {
            $this->getLogger(__FUNCTION__)->error('Plugin not active', 'is_active:'.$this->configHelper->getEnabled());
        }
    }

    /**
     * Calls the addRecipient API
     * 
     * @param string $postVars
     * 
     * @return string return the api status
     */
    public function addRecipient($postVars, $orderId = '') {
        if ($postVars != '') {
            $logMessage = "OrderID:{$orderId}";
            /*
             * The Api Url
             */
            $apiUrl = 'https://srr.ekomi.com/add-recipient';

            $boundary = md5('' . time());
            /*
             * Send the curl call
             */
            try {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('ContentType:multipart/form-data;boundary=' . $boundary));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postVars);
                $exec = curl_exec($ch);
                curl_close($ch);

                $decodedResp = json_decode($exec);

               if ($decodedResp && $decodedResp->status == 'error') {
                   $this->getLogger(__FUNCTION__)->error("$logMessage|orderData", $postVars);
                   $this->getLogger(__FUNCTION__)->error("$logMessage|$decodedResp->status", $logMessage .= $exec);
               }
                return TRUE;
            } catch (\Exception $e) {
                $this->getLogger(__FUNCTION__)->error("$logMessage|exception", $logMessage .= $e->getMessage());
            }
        }
        return FALSE;
    }

    /**
     * Fetches Product Reviews by Calling eKomi Api
     * 
     * @param string $range
     * @return Null
     */
    public function fetchProductReviews($range = 'all') {

        if ($this->configHelper->getEnabled() == 'true') {
            if ($this->validateShop()) {
                $review = $this->reviewsRepository->getReviewById(1);
                if (is_null($review)) {
                    $range = 'all';
                }

                $ekomi_api_url = "http://api.ekomi.de/v3/getProductfeedback?interface_id={$this->configHelper->getShopId()}&interface_pw={$this->configHelper->getShopSecret()}&type=json&charset=utf-8&range={$range}";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $ekomi_api_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $product_reviews = curl_exec($ch);
                curl_close($ch);

                // log the results
                if ($product_reviews) {
                    $reviews = json_decode($product_reviews, true);

                    if ($reviews) {
                        $this->reviewsRepository->saveReviews($reviews);
                        $this->getLogger(__FUNCTION__)->error('Reviews fetched  successfully', 'Reviews fetched  successfully. |url:' . $ekomi_api_url);
                    } else {
                        $this->getLogger(__FUNCTION__)->error('Something went wrong', 'Something went wrong! |url:' . $ekomi_api_url);
                    }
                } else {
                    $this->getLogger(__FUNCTION__)->error('No reviews available.', 'No reviews available. |url:' . $ekomi_api_url);
                }
            } else {
                $this->getLogger(__FUNCTION__)->error('Invalid credentials', 'Shop id or shop secret is not correct! |url:' . $ekomi_api_url);
            }
        } else {
            $this->getLogger(__FUNCTION__)->error('Plugin is not enabled', 'Config:'.$this->configHelper->getEnabled());
        }
        return NULL;
    }

}
