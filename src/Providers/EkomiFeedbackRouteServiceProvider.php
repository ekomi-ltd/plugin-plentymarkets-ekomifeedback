<?php

namespace EkomiFeedback\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class EkomiFeedbackRouteServiceProvider.
 */
class EkomiFeedbackRouteServiceProvider extends RouteServiceProvider
{
    /**
     * Registers the frontend route.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('sendOrdersToEkomi', 'EkomiFeedback\Controllers\ContentController@sendOrdersToEkomi');
    }
}
