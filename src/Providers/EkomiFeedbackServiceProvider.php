<?php

namespace EkomiFeedback\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Cron\Services\CronContainer;
use EkomiFeedback\Crons\EkomiFeedbackCron;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiFeedbackServiceProvider
 * @package EkomiFeedback\Providers
 */
class EkomiFeedbackServiceProvider extends ServiceProvider
{
    use Loggable;

    /**
     * Registers the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(EkomiFeedbackRouteServiceProvider::class);
    }

    /**
     * Adds cron task in plentymarkets.
     *
     * @param CronContainer $container
     */
    public function boot(CronContainer $container)
    {
        $container->add(CronContainer::EVERY_FIVE_MINUTES, EkomiFeedbackCron::class);
    }
}
