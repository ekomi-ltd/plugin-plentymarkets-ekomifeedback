<?php

namespace EkomiFeedback\Helper;

use Plenty\Plugin\ConfigRepository;

/**
 * Class ConfigHelper.
 */
class ConfigHelper
{
    /**
     * Product identifiers.
     */
    const PRODUCT_IDENTIFIER_ID = 'id"';
    const PRODUCT_IDENTIFIER_NUMBER = 'number';
    const PRODUCT_IDENTIFIER_VARIATION = 'variation';

    /**
     * Configuration enable/disable values.
     */
    const CONFIG_ENABLE_TRUE = 'true';
    const CONFIG_ENABLE_FALSE = 'false';
    const VALUE_1 = '1';
    const VALUE_0 = '0';
    const VALUE_YES = 1;
    const VALUE_NO = 0;

    /**
     * @var ConfigRepository
     */
    private $config;

    /**
     * ConfigHelper constructor.
     *
     * @param ConfigRepository $config
     */
    public function __construct(ConfigRepository $config)
    {
        $this->config = $config;
    }

    /**
     * Gets enabled from plugin configurations.
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->config->get('EkomiFeedback.is_active');
    }

    /**
     * Gets mode from plugin configurations.
     *
     * @return string
     */
    public function getMode()
    {
        return $this->config->get('EkomiFeedback.mode');
    }

    /**
     * Gets Turnaround time from plugin configurations.
     *
     * @return int
     */
    public function getTurnaroundTime()
    {
        return $this->config->get('EkomiFeedback.turnaround_time');
    }

    /**
     * Gets Shop Id from plugin configurations.
     *
     * @return string|string[]|null
     */
    public function getShopId()
    {
        $shopId = $this->config->get('EkomiFeedback.shop_id');

        return preg_replace('/\s+/', '', $shopId);
    }

    /**
     * Gets Plenty IDs from plugin configurations.
     *
     * @return array|bool
     */
    public function getPlentyIDs()
    {
        $plentyIds = false;
        $ids = $this->config->get('EkomiFeedback.plenty_IDs');
        $ids = preg_replace('/\s+/', '', $ids);
        if (!empty($ids)) {
            $plentyIds = explode(',', $ids);
        }

        return $plentyIds;
    }

    /**
     * Gets Shop Secret from plugin configurations.
     *
     * @return string|string[]|null
     */
    public function getShopSecret()
    {
        $secret = $this->config->get('EkomiFeedback.shop_secret');

        return preg_replace('/\s+/', '', $secret);
    }

    /**
     * Gets Product Reviews from plugin configurations.
     *
     * @return bool
     */
    public function getProductReviews()
    {
        if (self::CONFIG_ENABLE_TRUE == $this->config->get('EkomiFeedback.product_reviews')) {
            return self::VALUE_1;
        }

        return self::VALUE_NO;
    }

    /**
     * Gets Order Statuses array from plugin configurations.
     *
     * @return array
     */
    public function getOrderStatus()
    {
        $status = $this->config->get('EkomiFeedback.order_status');
        $statusArray = explode(',', $status);

        return $statusArray;
    }

    /**
     * Gets Referrer Ids array from plugin configurations.
     *
     * @return array
     */
    public function getReferrerIds()
    {
        $referrerIds = $this->config->get('EkomiFeedback.referrer_id');
        $referrerIds = explode(',', $referrerIds);

        return $referrerIds;
    }

    /**
     * Gets Smart Check from plugin configurations.
     *
     * @return bool
     */
    public function getSmartCheck()
    {
        return $this->config->get('EkomiFeedback.smart_check');
    }

    /**
     * Gets Product Identifier from plugin configurations.
     *
     * @return string
     */
    public function getProductIdentifier()
    {
        return $this->config->get('EkomiFeedback.product_identifier');
    }

    /**
     * Gets Exclude Products from plugin configurations.
     *
     * @return string
     */
    public function getExcludeProducts()
    {
        return $this->config->get('EkomiFeedback.exclude_products');
    }

    /**
     * Gets Show Widget from plugin configurations.
     *
     * @return bool
     */
    public function getShowWidgets()
    {
        return $this->config->get('EkomiFeedback.show_widgets');
    }

    /**
     * Gets PRC Widget Token from plugin configurations.
     *
     * @return string
     */
    public function getPrcWidgetToken()
    {
        $token = $this->config->get('EkomiFeedback.prc_widget_token');

        return preg_replace('/\s+/', '', $token);
    }

    /**
     * Gets MiniStars Widget Token from plugin configurations.
     *
     * @return string
     */
    public function getMiniStarsWidgetToken()
    {
        $token = $this->config->get('EkomiFeedback.miniStars_widget_token');

        return preg_replace('/\s+/', '', $token);
    }
}
