<?php

namespace EkomiFeedback\Helper;

use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Contracts\CountryRepositoryContract;

/**
 * Class EkomiHelper.
 */
class EkomiHelper
{
    /**
     * Plugin name in PD.
     */
    const PLUGIN_NAME = 'plentymarkets';
    /**
     * @var ConfigRepository
     */
    private $configHelper;
    /**
     * @var WebstoreRepositoryContract
     */
    private $webStoreRepo;
    /**
     * @var ItemImageRepositoryContract
     */
    private $imagesRepo;
    /**
     * @var CountryRepositoryContract
     */
    private $countryRepo;

    /**
     * Initializes object variables.
     *
     * @param WebstoreRepositoryContract         $webStoreRepo
     * @param \EkomiFeedback\Helper\ConfigHelper $configHelper
     * @param ItemImageRepositoryContract        $imagesRepo
     * @param CountryRepositoryContract          $countryRepo
     */
    public function __construct(
        WebstoreRepositoryContract $webStoreRepo,
        ConfigHelper $configHelper,
        ItemImageRepositoryContract $imagesRepo,
        CountryRepositoryContract $countryRepo
    ) {
        $this->configHelper = $configHelper;
        $this->webStoreRepo = $webStoreRepo;
        $this->imagesRepo = $imagesRepo;
        $this->countryRepo = $countryRepo;
    }

    /**
     * Gets the order data and prepare post variables.
     *
     * @param array $order order object as array
     *
     * @return array the comma separated parameters
     */
    public function preparePostVars($order)
    {
        $id = $order['id'];
        $plentyId = $order['plentyId'];
        $fields = array(
            'shop_id' => $this->configHelper->getShopId(),
            'interface_password' => $this->configHelper->getShopSecret(),
            'mode' => $this->configHelper->getMode(),
            'product_reviews' => $this->configHelper->getProductReviews(),
            'plugin_name' => self::PLUGIN_NAME,
            'product_identifier' => $this->configHelper->getProductIdentifier(),
            'exclude_products' => $this->configHelper->getExcludeProducts(),
        );

        $order['senderName'] = $this->getWebStoreName($plentyId);
        $order['senderEmail'] = '';
        foreach ($order['addresses'] as $key => $address) {
            $countryInfo = $this->countryRepo->getCountryById($address['countryId']);
            $order['addresses'][$key]['countryName'] = $countryInfo->name;
            $order['addresses'][$key]['isoCode2'] = $countryInfo->isoCode2;
            $order['addresses'][$key]['isoCode3'] = $countryInfo->isoCode3;
        }

        $order['orderItems'] = $this->getProductsData($order['orderItems'], $plentyId);
        $fields['order_data'] = $order;

        return $fields;
    }

    /**
     * Gets web store.
     *
     * @param int $plentyId
     *
     * @return string
     */
    protected function getWebStoreName($plentyId)
    {
        $temp1 = $this->webStoreRepo->findByPlentyId($plentyId)->toArray();
        if (isset($temp1['name'])) {
            return $temp1['name'];
        }

        return '';
    }

    /**
     * Gets the products data.
     *
     * @param array $orderItems
     * @param int   $plentyId
     *
     * @return array
     */
    protected function getProductsData($orderItems, $plentyId)
    {
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
     * Gets Item image url.
     *
     * @param int $itemId   the item Id
     * @param int $plentyId
     *
     * @return array the url of image
     */
    public function getItemURLs($itemId, $plentyId)
    {
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
        $itemUrl = $itemUrl.'/a-'.$itemId;

        return ['itemUrl' => $itemUrl, 'imgUrl' => $imagUrl];
    }

    /**
     * Gets item image url.
     *
     * @param int $itemId
     *
     * @return string
     */
    public function getItemImageUrl($itemId)
    {
        $images = $this->imagesRepo->findByItemId($itemId);
        if (isset($images[0])) {
            return $images[0]['url'];
        }

        return '';
    }

    /**
     * Gets Store domain Url.
     *
     * @param int $plentyId
     *
     * @return string
     */
    protected function getStoreDomain($plentyId)
    {
        $temp1 = $this->webStoreRepo->findByPlentyId($plentyId)->toArray();
        if (isset($temp1['configuration']['domain'])) {
            return $temp1['configuration']['domain'];
        }

        return '';
    }

    /**
     * Prepares filter to be applied in fetching orders.
     *
     * @param int $turnaroundTime
     *
     * @return array
     */
    public function prepareFilter($turnaroundTime)
    {
        $updatedAtFrom = date('Y-m-d\TH:i:s+00:00', strtotime("-{$turnaroundTime} day"));
        $updatedAtTo = date('Y-m-d\TH:i:s+00:00');

        return ['updatedAtFrom' => $updatedAtFrom, 'updatedAtTo' => $updatedAtTo];
    }
}
