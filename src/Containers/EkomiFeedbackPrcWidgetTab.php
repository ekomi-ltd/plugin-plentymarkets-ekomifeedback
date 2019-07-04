<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container Tab.
 */
class EkomiFeedbackPrcWidgetTab
{
    /**
     * Renders HTML code to create new tab on the product page.
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
            $templateData = array();

            return $twig->render('EkomiFeedback::content.prcWidgetTab', $templateData);
        }

        return '';
    }
}
