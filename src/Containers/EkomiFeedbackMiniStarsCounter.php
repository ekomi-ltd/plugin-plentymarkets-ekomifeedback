<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Repositories\ReviewsRepository;
use EkomiFeedback\Helper\ConfigHelper;
/**
 * Mini Stars counter
 */
class EkomiFeedbackMiniStarsCounter {

    public function call(Twig $twig, $arg)
    {
        $configHelper = pluginApp(ConfigHelper::class);

        if ($configHelper->getEnabled() == 'true') {
            $reviewRepo = pluginApp(ReviewsRepository::class);
            $templateData = $reviewRepo->getMiniStarsStats($arg[0]);

            return $twig->render('EkomiFeedback::content.miniStarsCounter', $templateData);
        }

        return '';
    }

}
