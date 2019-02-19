<?php

namespace EkomiFeedback\Helper;

use Plenty\Modules\Helper\Contracts\UrlBuilderRepositoryContract;
use Plenty\Modules\Item\Variation\Contracts\VariationRepositoryContract;
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
     * @var VariationRepositoryContract
     */
    private $itemVariationRepository;

    /**
     * @var UrlBuilderRepositoryContract
     */
    private $urlBuilderRepositoryContract;

    /**
     * Initializes object variables.
     *
     * @param WebstoreRepositoryContract         $webStoreRepo
     * @param \EkomiFeedback\Helper\ConfigHelper $configHelper
     * @param ItemImageRepositoryContract        $imagesRepo
     * @param CountryRepositoryContract          $countryRepo
     * @param VariationRepositoryContract        $itemVariationRepository
     * @param UrlBuilderRepositoryContract       $urlBuilderRepositoryContract
     */
    public function __construct(
        WebstoreRepositoryContract $webStoreRepo,
        ConfigHelper $configHelper,
        ItemImageRepositoryContract $imagesRepo,
        CountryRepositoryContract $countryRepo,
        VariationRepositoryContract $itemVariationRepository,
        UrlBuilderRepositoryContract $urlBuilderRepositoryContract
    ) {
        $this->configHelper = $configHelper;
        $this->webStoreRepo = $webStoreRepo;
        $this->imagesRepo = $imagesRepo;
        $this->countryRepo = $countryRepo;
        $this->itemVariationRepository = $itemVariationRepository;
        $this->urlBuilderRepositoryContract = $urlBuilderRepositoryContract;
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
        foreach ($orderItems as $key => $item) {
            if (isset($product['itemVariationId'])) {
                $itemVariation = $this->itemVariationRepository->findById($item['itemVariationId']);
                if ($itemVariation) {
                    $itemId = $itemVariation->itemId;
                    $item['itemId'] = $itemId;
                    $item['imageNumber'] = $itemVariation->number;
                    $item['image_url'] = utf8_decode($this->getItemImageUrl($itemId, $item['itemVariationId']));
                    $item['canonical_url'] = utf8_decode($this->getItemUrl($plentyId, $itemId));
                    $products[] = $item;
                }
            }
        }

        return $products;
    }

    /**
     * Gets Item image url.
     *
     * @param int    $plentyId
     * @param int    $itemId
     *
     * @return array
     */
    public function getItemUrl($plentyId, $itemId) {
        $itemUrl = $this->urlBuilderRepositoryContract->getItemUrl($itemId,$plentyId);
        if(empty($itemUrl)){
            $itemUrl = $this->getStoreDomain($plentyId);
            $itemUrl = $itemUrl . '/a-' . $itemId;
        }

        return $itemUrl;
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
