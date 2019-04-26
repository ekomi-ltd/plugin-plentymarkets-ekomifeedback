<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Repositories\ReviewsRepository;
use EkomiFeedback\Helper\ConfigHelper;

/**
 * Ekomi Feedback Reviews Container Tab
 */
class EkomiFeedbackReviewsContainerTab {

    public function call(Twig $twig, $arg)
    {

        $configHelper = pluginApp(ConfigHelper::class);

        if ($configHelper->getEnabled() == 'true') {
            $reviewRepo = pluginApp(ReviewsRepository::class);

            $count = $reviewRepo->getReviewsCount($arg[0]);

            $templateData = array("reviewsCount" => $count);

            return $twig->render('EkomiFeedback::content.reviewsContainerTab', $templateData);
        }

        return '';
    }

}