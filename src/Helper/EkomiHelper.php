<?php

namespace EkomiFeedback\Helper;

use EkomiFeedback\Helper\ConfigHelper;

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

    public function __construct(
        WebstoreRepositoryContract $webStoreRepo,
        ConfigHelper $configHelper,
        ItemImageRepositoryContract $imagesRepo,
        VariationRepositoryContract $itemVariationRepository
    ) {
        $this->configHelper = $configHelper;
        $this->webStoreRepo = $webStoreRepo;
        $this->imagesRepo = $imagesRepo;
        $this->itemVariationRepository = $itemVariationRepository;
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

        $customerInfo=$order['relations'][1]['contactReceiver'];

        $apiMode = $this->getRecipientType($customerInfo['privatePhone']);

        $scheduleTime = $this->toMySqlDateTime($createdAt);

        $senderName = $this->getStoreName($plentyId);

        if ($apiMode == 'sms' && strlen($senderName) > 11) {
            $senderName = substr($senderName, 0, 11);
        }

        $fields = array(
            'shop_id' => $this->configHelper->getShopId(),
            'password' => $this->configHelper->getShopSecret(),
            'recipient_type' => $apiMode,
            'salutation' => '',
            'first_name' => $customerInfo['firstName'],
            'last_name' => $customerInfo['lastName'],
            'email' => $customerInfo['email'],
            'transaction_id' => $id,
            'transaction_time' => $scheduleTime,
            'telephone' => $customerInfo['privatePhone'],
            'sender_name' => $senderName,
            'sender_email' => ''
        );

        $fields['client_id'] = $customerInfo['id'];
        $fields['screen_name'] = $customerInfo['fullName'];

        if ($this->configHelper->getProductReviews() == 'true') {
            $fields['has_products'] = 1;
            $productsData = $this->getProductsData($order['orderItems'], $plentyId);
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
     * Gets item image url
     * 
     * @param type $itemId
     * @return string
     */
    public function getItemImageUrl($itemId) {
        $images = $this->imagesRepo->findByItemId($itemId);
        if (isset($images[0])) {
            return $images[0]['url'];
        }
        return '';
    }

    /**
     * Gets Item image url
     * 
     * @param int $itemId The item Id
     *  
     * @return string The url of image
     */
    public function getItemURLs($itemId, $plentyId) {
        $itemUrl = '';

        $imagUrl = $this->getItemImageUrl($itemId);

        if (isset($imagUrl[0])) {
            if (!empty($imagUrl[0]['url'])) {
                $temp = explode('/item/', $imagUrl[0]['url']);
                if (isset($temp[0])) {
                    $itemUrl = $temp[0];
                }
            }
        }
        if (empty($itemUrl)) {
            $itemUrl = $this->getStoreDomain($plentyId);
        }
        $itemUrl = $itemUrl . '/a-' . $itemId;

        return ['itemUrl'=>$itemUrl,'imgUrl'=>$imagUrl];
    }

    /**
     * Gets the products data
     * 
     * @return array The products array
     * 
     * @access protected
     */
    protected function getProductsData($orderItems, $plentyId) {

        $products = array();
        foreach ($orderItems as $key => $product) {
            if (!empty($product['properties'])) {
                $itemVariation = $this->itemVariationRepository->findById($product['itemVariationId']);

                $this->getLogger(__FUNCTION__)->error('ItemVariation', $itemVariation);


                $itemId = $itemVariation->itemId;
                $itemURLs = $this->getItemURLs($itemId, $plentyId);
                if ($this->configHelper->getProductIdentifier() == 'number'){
                    $itemId = $itemVariation->id;
                } elseif ($this->configHelper->getProductIdentifier() == 'variation'){
                    $itemId = $itemVariation->number;
                }

                $this->getLogger(__FUNCTION__)->error('itemIdentifiers', array('id'=>$itemId,'vId'=>$itemVariation->id,'number'=>$itemVariation->number));

                $products['product_info'][$itemId] = $product['orderItemName'];

                $productOther = array();

                $productOther['image_url'] = utf8_decode($itemURLs['imgUrl']);

                $productOther['brand_name'] = '';

                $productOther['product_ids'] = array(
                    'gbase' => utf8_decode($itemId)
                );

                $productOther['links'] = array(
                    array('rel' => 'canonical', 'type' => 'text/html',
                        'href' => utf8_decode($itemURLs['itemUrl']))
                );

                $products['other'][$itemId]['product_other'] = $productOther;
            }
        }

        return $products;
    }

    /**
     * Gets the recipient type
     * 
     * @param string $telephone The phone nu,ber
     * 
     * @return string Recipient type
     * 
     * @access protected
     */
    protected function getRecipientType($telephone) {

        $reviewMod = $this->configHelper->getMod();
        $apiMode = 'email';
        switch ($reviewMod) {
            case 'sms':
                $apiMode = 'sms';
                break;
            case 'email':
                $apiMode = 'email';
                break;
            case 'fallback':
                if ($this->validateE164($telephone))
                    $apiMode = 'sms';
                else
                    $apiMode = 'email';
                break;
        }

        return $apiMode;
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
