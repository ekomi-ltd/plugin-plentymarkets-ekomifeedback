<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container.
 */
class EkomiFeedbackSmartWidget
{
    /**
     * Renders HTML content for newly created tab on the product page.
     *
     * @param Twig  $twig
     * @param array $arg
     *
     * @return string
     */
    public function call(Twig $twig, $arg)
    {
        $configHelper = pluginApp(ConfigHelper::class);
        if (ConfigHelper::CONFIG_ENABLE_TRUE == $configHelper->getEnabled() &&
            ConfigHelper::CONFIG_ENABLE_TRUE == $configHelper->getShowPrcWidget() &&
            !empty($configHelper->getPrcWidgetToken())
        ) {
            $item = $arg[0];
            if (isset($item['item']['id'])) {
                $productIdentifier = trim($item['item']['id']);
                if (ConfigHelper::PRODUCT_IDENTIFIER_VARIATION == $configHelper->getProductIdentifier()) {
                    $productIdentifier = trim($item['variation']['id']);
                } elseif (ConfigHelper::PRODUCT_IDENTIFIER_NUMBER == $configHelper->getProductIdentifier()) {
                    $productIdentifier = trim($item['variation']['number']);
                }

                $data = array(
                    'productIdentifier' => $productIdentifier,
                    'customerId' => $configHelper->getShopId(),
                    'widgetToken' => $configHelper->getPrcWidgetToken(),
                );

                return $twig->render('EkomiFeedback::content.smartWidget', $data);
            }
        }

        return '';
    }
}