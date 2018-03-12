<?php

namespace EkomiFeedback\Containers;

use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Repositories\ReviewsRepository;

/**
 * Mini Stars counter
 */
class EkomiFeedbackMiniStarsCounter {

    public function call(Twig $twig) {
        return $twig->render('EkomiFeedback::content.resources');
    }

}
