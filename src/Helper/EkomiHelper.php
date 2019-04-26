<?php

namespace EkomiFeedback\Helper;

use EkomiFeedback\Helper\ConfigHelper;
use Plenty\Modules\Helper\Contracts\UrlBuilderRepositoryContract;
use Plenty\Modules\Item\Variation\Contracts\VariationRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiHelper
 */
class EkomiHelper {
    use Loggable;

    /**
     * @var ConfigRepository
     */
    private $configHelper;
    private $webStoreRepo;
    private $imagesRepo;
    private $itemVariationRepository;
    private $urlBuilderRepositoryContract;

    /**
     * Product identifiers.
     */
    const PRODUCT_IDENTIFIER_ID = 'id"';
    const PRODUCT_IDENTIFIER_NUMBER = 'number';
    const PRODUCT_IDENTIFIER_VARIATION = 'variation';

    /**
     * Recipients modes.
     */
    const RECIPIENT_MODE_SMS= 'sms';
    const RECIPIENT_MODE_EMAIL= 'email';
    const RECIPIENT_MODE_FALLBACK= 'fallback';

    /**
     * Customer address types.
     */
    const ADDRESS_TYPE_PHONE = 4;
    const ADDRESS_TYPE_EMAIL = 5;

    /**
     * Sender name length.
     */
    const SENDER_NAME_LENGTH = 11;

    /**
     * EkomiHelper constructor.
     *
     * @param WebstoreRepositoryContract         $webStoreRepo
     * @param \EkomiFeedback\Helper\ConfigHelper $configHelper
     * @param ItemImageRepositoryContract        $imagesRepo
     * @param VariationRepositoryContract        $itemVariationRepository
     * @param UrlBuilderRepositoryContract       $urlBuilderRepositoryContract
     */
    public function __construct(
        WebstoreRepositoryContract $webStoreRepo,
        ConfigHelper $configHelper,
        ItemImageRepositoryContract $imagesRepo,
        VariationRepositoryContract $itemVariationRepository,
        UrlBuilderRepositoryContract $urlBuilderRepositoryContract
    ) {
        $this->configHelper = $configHelper;
        $this->webStoreRepo = $webStoreRepo;
        $this->imagesRepo = $imagesRepo;
        $this->itemVariationRepository = $itemVariationRepository;
        $this->urlBuilderRepositoryContract = $urlBuilderRepositoryContract;
    }

    /**
     * Gets the order data and prepare post variables
     *
     * @param array $order Order object as array
     *
     * @return string The comma separated parameters
     */
    function preparePostVars($order) {
        $id = $order['id'];
        $plentyId = $order['plentyId'];
        $createdAt = $order['createdAt'];
        $customerInfo = $order['relations'][1]['contactReceiver'];
        $billingAddress = $order['addresses'][0];
        $apiMode = $this->getRecipientType($customerInfo['privatePhone']);
        $scheduleTime = $this->toMySqlDateTime($createdAt);
        $senderName = $this->getStoreName($plentyId);
        if (self::RECIPIENT_MODE_SMS == $apiMode && strlen($senderName) > self::SENDER_NAME_LENGTH) {
            $senderName = substr($senderName, 0, self::SENDER_NAME_LENGTH);
        }

        $customerContactInfo = $this->getCustomerContactInfo($customerInfo, $billingAddress);
        $fields = array(
            'shop_id' => $this->configHelper->getShopId(),
            'password' => $this->configHelper->getShopSecret(),
            'recipient_type' => $apiMode,
            'salutation' => '',
            'first_name' => (is_null($billingAddress['name2'])) ? $billingAddress['name1'] : $billingAddress['name2'],
            'last_name' => (is_null($billingAddress['name3'])) ? $billingAddress['name4'] : $billingAddress['name3'],
            'email' => $customerContactInfo['email'],
            'transaction_id' => $id,
            'transaction_time' => $scheduleTime,
            'telephone' => $customerContactInfo['phone'],
            'sender_name' => $senderName,
            'sender_email' => ''
        );

        $fields['client_id'] = $customerInfo['id'];
        $fields['screen_name'] = $fields['first_name'].' '.$fields['last_name'];
        if ($this->configHelper->getProductReviews() == 'true') {
            $productsData = $this->getProductsData($order['orderItems'], $plentyId);
            $fields['has_products'] = $productsData['has_products'];
            $fields['products_info'] = json_encode($productsData['product_info']);
            $fields['products_other'] = json_encode($productsData['other']);
        }

        $postVars = '';
        $counter = 1;
        foreach ($fields as $key => $value) {
            if ($counter > 1)
                $postVars .= "&";
            $postVars .= $key . "=" . $value;
            $counter++;
        }

        return $postVars;
    }

    /**
     * Gets customer contact information.
     *
     * @param array $customerInfo
     * @param array $billingAddress
     * @return null
     */
    public function getCustomerContactInfo($customerInfo, $billingAddress) {
        $contactInfo = ['email'=> $customerInfo['email'],'phone' => $customerInfo['privatePhone']];
        foreach ( $billingAddress['options'] as $key=>$address) {
            if(self::ADDRESS_TYPE_EMAIL == $address['typeId']) {
                $contactInfo['email'] = $address['value'];
            } elseif (self::ADDRESS_TYPE_PHONE == $address['typeId']) {
                $contactInfo['phone'] = $address['value'];
            }
        }

        return $contactInfo;
    }

    /**
     * Gets item image url.
     *
     * @param int    $itemId
     * @param string $variationId
     *
     * @return string
     */
    public function getItemImageUrl($itemId, $variationId) {
        $variationImage = $this->imagesRepo->findByVariationId($variationId);
        $itemImage = $this->imagesRepo->findByItemId($itemId);
        if (isset($variationImage[0])) {
            return $variationImage[0]['url'];
        } elseif (isset($itemImage[0])) {
            return $itemImage[0]['url'];
        }

        return '';
    }

    /**
     * Gets Item image url.
     *
     * @param int    $plentyId
     * @param int    $itemId
     * @param string $variationId
     *
     * @return array
     */
    public function getItemURLs($plentyId, $itemId, $variationId) {
        $imagUrl = $this->getItemImageUrl($itemId, $variationId);
        $itemUrl = $this->urlBuilderRepositoryContract->getItemUrl($itemId,$plentyId);
        if(empty($itemUrl)){
            $itemUrl = $this->getStoreDomain($plentyId);
            $itemUrl = $itemUrl . '/a-' . $itemId;
        }

        return ['itemUrl'=>$itemUrl,'imgUrl'=>$imagUrl];
    }

    /**
     * Gets the products data.
     *
     * @param array $orderItems
     * @param int   $plentyId
     *
     * @return array
     */
    protected function getProductsData($orderItems, $plentyId) {
        $products = array('has_products'=>0);
        $productIdentifier = $this->configHelper->getProductIdentifier();
        foreach ($orderItems as $key => $product) {
            if (isset($product['itemVariationId'])) {
                if ($product['itemVariationId'] > 0) {
                    $itemVariation = $this->itemVariationRepository->findById($product['itemVariationId']);
                    if ($itemVariation) {
                        $itemId = $itemVariation->itemId;
                        $itemURLs = $this->getItemURLs($plentyId, $itemId, $product['itemVariationId']);
                        if (self::PRODUCT_IDENTIFIER_NUMBER == $productIdentifier) {
                            $itemId = $itemVariation->number;
                        } elseif (self::PRODUCT_IDENTIFIER_VARIATION == $productIdentifier) {
                            $itemId = $itemVariation->id;
                        }

                        $products['product_info'][$itemId] = str_replace('&', ' ', $product['orderItemName']);
                        $productOther = array();
                        $productOther['image_url'] = utf8_decode($itemURLs['imgUrl']);
                        $productOther['brand_name'] = '';
                        $productOther['product_ids'] = array('gbase' => utf8_decode($itemId));
                        $canonicalUrl = utf8_decode($itemURLs['itemUrl']);
                        $productOther['links'] = array(
                            array('rel' => 'canonical', 'type' => 'text/html', 'href' => $canonicalUrl)
                        );

                        $products['other'][$itemId]['product_canonical_link'] = $canonicalUrl;
                        $products['other'][$itemId]['product_other'] = $productOther;
                        $products['has_products'] = 1;
                    }
                }
            }
        }

        return $products;
    }

    /**
     * Gets the recipient type.
     *
     * @param string $telephone The phone number
     *
     * @return string Recipient type
     *
     * @access protected
     */
    protected function getRecipientType($telephone) {
        $reviewMod = $this->configHelper->getMod();
        if (self::RECIPIENT_MODE_SMS == $reviewMod) {
            return self::RECIPIENT_MODE_SMS;
        } elseif (self::RECIPIENT_MODE_FALLBACK == $reviewMod && $this->validateE164($telephone)) {
            return self::RECIPIENT_MODE_SMS;
        }

        return self::RECIPIENT_MODE_EMAIL;
    }

    /**
     * Validates E164 numbers
     *
     * @param $phone The phone number
     *
     * @return bool Yes if matches False otherwise
     *
     * @access protected
     */
    protected function validateE164($phone) {
        $pattern = '/^\+?[1-9]\d{1,14}$/';

        preg_match($pattern, $phone, $matches);

        if (!empty($matches)) {
            return true;
        }

        return false;
    }

    /**
     * Converts date to Mysql formate
     *
     * @param string $date The date
     *
     * @return string The formatted date
     */
    public function toMySqlDateTime($date) {
        try {
            return date('d-m-Y H:i:s', strtotime($date));
        } catch (\Exception $exc) {
            echo $exc->getTraceAsString();
            return $date;
        }
    }

    /**
     * Gets store name
     *
     * @return string
     *
     * @access protected
     */
    protected function getStoreName($plentyId) {
        $temp1 = $this->webStoreRepo->findByPlentyId($plentyId)->toArray();
        if (isset($temp1['name'])) {
            return $temp1['name'];
        }
        return '';
    }

    /**
     * Gets Store domain Url
     *
     * @param type $plentyId
     *
     * @return string
     *
     * @access protected
     */
    protected function getStoreDomain($plentyId) {
        $temp1 = $this->webStoreRepo->findByPlentyId($plentyId)->toArray();
        if (isset($temp1['configuration']['domain'])) {
            return $temp1['configuration']['domain'];
        }
        return '';
    }

}
