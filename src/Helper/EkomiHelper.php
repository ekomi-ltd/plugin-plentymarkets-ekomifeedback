<?php

namespace EkomiFeedback\Helper;

use EkomiFeedback\Helper\ConfigHelper;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Contracts\CountryRepositoryContract;

/**
 * Class EkomiHelper
 */
class EkomiHelper {

    /**
     * @var ConfigRepository
     */
    private $configHelper;
    private $webStoreRepo;
    private $imagesRepo;
    private $countryRepo;

    public function __construct(WebstoreRepositoryContract $webStoreRepo, ConfigHelper $configHelper, ItemImageRepositoryContract $imagesRepo, CountryRepositoryContract $countryRepo) {
        $this->configHelper = $configHelper;
        $this->webStoreRepo = $webStoreRepo;
        $this->imagesRepo = $imagesRepo;
        $this->countryRepo = $countryRepo;
    }

    /**
     * Gets the order data and prepare post variables.
     * 
     * @param array $order Order object as array.
     * 
     * @return array The comma separated parameter.s
     */
    function preparePostVars($order) {
	    $id = $order['id'];
	    $plentyId = $order['plentyId'];
	    $fields   = array(
		    'shop_id'            => $this->configHelper->getShopId(),
		    'interface_password' => $this->configHelper->getShopSecret(),
		    'mode'               => $this->configHelper->getMode(),
		    'product_reviews'    => $this->configHelper->getProductReviews(),
		    'plugin_name'        => 'plentymarkets',
		    'product_identifier' => $this->configHelper->getProductIdentifier(),
		    'exclude_products'   => $this->configHelper->getExcludeProducts(),
	    );

	    $order['senderName']  = $this->getWebStoreName($plentyId);
        $order['senderEmail'] = '';

	    foreach ($order['addresses'] as $key=>$address) {
	        $countryInfo = $this->countryRepo->getCountryById($address['countryId']);

            $order['addresses'][$key]['countryName'] = $countryInfo->name;
            $order['addresses'][$key]['isoCode2'] = $countryInfo->isoCode2;
            $order['addresses'][$key]['isoCode3'] = $countryInfo->isoCode3;
        }

        $order['orderItems']  = $this->getProductsData($order['orderItems'], $plentyId);
	    $fields['order_data'] = $order;

	    return $fields;
    }

    /**
     * Gets item image url.
     * 
     * @param int $itemId
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
     * Gets Item image url.
     * 
     * @param int $itemId The item Id.
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
     * Gets the products data.
     * 
     * @return array The products array
     * 
     * @access protected
     */
    protected function getProductsData($orderItems, $plentyId) {

        $products = array();
        foreach ($orderItems as $key => $product) {
            if (!empty($product['properties'])) {
                $itemURLs = $this->getItemURLs($product['id'], $plentyId);

	            $product['image_url'] = utf8_decode($itemURLs['imgUrl']);
	            $product['canonical_url'] = utf8_decode($itemURLs['itemUrl']);

	            $products[] = $product;
            }
        }

        return $products;
    }

    /**
     * Gets web store.
     *
     * @return string
     *
     * @access protected
     */
    protected function getWebStoreName($plentyId) {
        $temp1 = $this->webStoreRepo->findByPlentyId($plentyId)->toArray();
        if (isset($temp1['name'])) {
            return $temp1['name'];
        }

        return '';
    }

    /**
     * Gets Store domain Url.
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
