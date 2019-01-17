<?php

namespace EkomiFeedback\Helper;

use Plenty\Plugin\ConfigRepository;

/**
 * Class ConfigHelper
 */
class ConfigHelper {

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
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->config->get('EkomiFeedback.is_active');
    }

    /**
     * Gets mode from plugin configurations.
     *
     * @return mixed
     */
    public function getMode()
    {
        return $this->config->get('EkomiFeedback.mode');
    }

    /**
     * Gets Turnaround time from plugin configurations.
     *
     * @return mixed
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
        $plentyIDs = false;
        $IDs       = $this->config->get('EkomiFeedback.plenty_IDs');
        $IDs       = preg_replace('/\s+/', '', $IDs);
        if (!empty($IDs)) {
            $plentyIDs = explode(',', $IDs);
        }

        return $plentyIDs;
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
     * @return mixed
     */
    public function getProductReviews()
    {
        return $this->config->get('EkomiFeedback.product_reviews');
    }

    /**
     * Gets Order Statuses array from plugin configurations.
     *
     * @return array
     */
    public function getOrderStatus()
    {
        $status      = $this->config->get('EkomiFeedback.order_status');
        $statusArray = explode(',', $status);

        return $statusArray;
    }

    /**
     * Gets Referrer IDs array from plugin configurations.
     *
     * @return array|mixed
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
     * @return mixed
     */
	public function getSmartCheck()
	{
		return $this->config->get('EkomiFeedback.smart_check');
	}

    /**
     * Gets Product Identifier from plugin configurations.
     *
     * @return mixed
     */
	public function getProductIdentifier()
	{
		return $this->config->get('EkomiFeedback.product_identifier');
	}

    /**
     * Gets Exclude Products from plugin configurations.
     *
     * @return mixed
     */
	public function getExcludeProducts()
	{
		return $this->config->get('EkomiFeedback.exclude_products');
	}

    /**
     * Gets Show Widget from plugin configurations.
     *
     * @return mixed
     */
	public function getShowPrcWidget()
	{
		return $this->config->get('EkomiFeedback.show_prc_widget');
	}

    /**
     * Gets Widget Token from plugin configurations.
     * @return mixed
     */
	public function getPrcWidgetToken()
	{
		return $this->config->get('EkomiFeedback.prc_widget_token');
	}
}
