<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container.
 */
class EkomiFeedbackPrcWidget
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
            ConfigHelper::CONFIG_ENABLE_TRUE == $configHelper->getShowWidgets() &&
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
                    'uniqueId' => uniqid("p{$productIdentifier}_"),
                );

                return $twig->render('EkomiFeedback::content.prcWidget', $data);
            }
        }

        return '';
    }
}
