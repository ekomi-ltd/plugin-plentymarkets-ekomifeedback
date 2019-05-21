<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Repositories\ReviewsRepository;
use EkomiFeedback\Helper\ConfigHelper;
use EkomiFeedback\Services\EkomiServices;


/**
 * Ekomi Feedback Reviews Container
 */
class EkomiFeedbackReviewsContainer {

    public function call(Twig $twig, $arg) {

        $configHelper = pluginApp(ConfigHelper::class);

        if ($configHelper->getEnabled() == 'true') {
            $ekomiServices = pluginApp(EkomiServices::class);
            $ekomiServices->fetchProductReviews($range = 'all');

            $offset = 0;
            $limit = 5;

            $reviewRepo = pluginApp(ReviewsRepository::class);

            $data = $reviewRepo->getReviewsContainerStats($arg[0], $offset, $limit);

            return $twig->render('EkomiFeedback::content.reviewsContainer', $data);
        }

        return '';
    }

}
