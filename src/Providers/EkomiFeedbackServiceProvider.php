<?php

namespace EkomiFeedback\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Cron\Services\CronContainer;
use EkomiFeedback\Crons\EkomiFeedbackCron;
use EkomiFeedback\Repositories\ReviewsRepository;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiFeedbackServiceProvider
 * @package EkomiFeedback\Providers
 */
class EkomiFeedbackServiceProvider extends ServiceProvider {

    use Loggable;

    /**
     * Register the service provider.
     */
    public function register() {
        $this->getApplication()->register(EkomiFeedbackRouteServiceProvider::class);
        $this->getApplication()->bind(ReviewsRepository::class);
    }

    /**
     * Runs after every few seconds.
     *
     * @param CronContainer $container
     * @param ReviewsRepository $reviewsRepo
     */
    public function boot(CronContainer $container, ReviewsRepository $reviewsRepo) {
        if (is_null($reviewsRepo->getReviewById(1))) {
            $container->add(CronContainer::EVERY_FIFTEEN_MINUTES, EkomiFeedbackCron::class);
        } else {
            $container->add(CronContainer::DAILY, EkomiFeedbackCron::class);
        }
    }

}
