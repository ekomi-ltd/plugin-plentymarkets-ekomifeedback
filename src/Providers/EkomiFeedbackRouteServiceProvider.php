<?php

namespace EkomiFeedback\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class EkomiFeedbackRouteServiceProvider
 * @package EkomiFeedback\Providers
 */
class EkomiFeedbackRouteServiceProvider extends RouteServiceProvider {

    /**
     * @param Router $router
     */
    public function map(Router $router) {
        $router->get('sendOrdersToEkomi', 'EkomiFeedback\Controllers\ContentController@sendOrdersToEkomi')->addMiddleware(['oauth.cookie', 'oauth',]);
        $router->get('fetchProductReviews', 'EkomiFeedback\Controllers\ContentController@fetchProductReviews')->addMiddleware(['oauth.cookie', 'oauth',]);

        /**
         * Routes for ajax calls
         */
        $router->post('loadReviews', 'EkomiFeedback\Controllers\ContentController@loadReviews')->addMiddleware(['oauth.cookie', 'oauth',]);
        $router->post('saveFeedback', 'EkomiFeedback\Controllers\ContentController@saveFeedback')->addMiddleware(['oauth.cookie', 'oauth',]);
    }

}
