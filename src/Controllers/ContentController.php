<?php

namespace EkomiFeedback\Controllers;

use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Services\EkomiServices;
use Plenty\Plugin\Log\Loggable;

/**
 * Class ContentController.
 */
class ContentController extends Controller
{
    use Loggable;

    /**
     * Sends orders to eKomi.
     *
     * @param Twig $twig
     *
     * @return string
     */
    public function sendOrdersToEkomi(Twig $twig)
    {
        $service = pluginApp(EkomiServices::class);
        $authHelper = pluginApp(AuthHelper::class);
        $service->sendOrdersData();
        $orders = null;
        $orders = $authHelper->processUnguarded(
            function () use ($service, $orders) {
                return  $service->sendOrdersData();
            }
        );

        return $twig->render('EkomiFeedback::content.hello');
    }
}
