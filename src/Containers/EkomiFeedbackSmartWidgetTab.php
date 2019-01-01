<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container Tab
 */
class EkomiFeedbackSmartWidgetTab {

    public function call(Twig $twig, $arg)
    {
        $configHelper = pluginApp(ConfigHelper::class);

        if ($configHelper->getEnabled() == 'true' && $configHelper->getShowPrcWidget() == 'true') {
            $templateData = array();

            return $twig->render('EkomiFeedback::content.smartWidgetTab', $templateData);
        }

        return '';
    }
}
