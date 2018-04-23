<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Mini Stars counter
 */
class EkomiFeedbackResources {

    public function call(Twig $twig) {
        $configHelper = pluginApp(ConfigHelper::class);

        if ($configHelper->getEnabled() == 'true') {
            return $twig->render('EkomiFeedback::content.resources');
        }

        return '';
    }

}
