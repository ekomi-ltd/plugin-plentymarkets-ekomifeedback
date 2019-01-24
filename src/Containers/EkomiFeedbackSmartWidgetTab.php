<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container Tab.
 */
class EkomiFeedbackSmartWidgetTab
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
        if ('true' == $configHelper->getEnabled() && 'true' == $configHelper->getShowPrcWidget()) {
            $templateData = array();

            return $twig->render('EkomiFeedback::content.smartWidgetTab', $templateData);
        }

        return '';
    }
}
