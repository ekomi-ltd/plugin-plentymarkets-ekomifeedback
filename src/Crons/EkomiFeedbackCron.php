<?php

namespace EkomiFeedback\Crons;

use Plenty\Modules\Cron\Contracts\CronHandler as Cron;
use EkomiFeedback\Services\EkomiServices;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiFeedbackCron
 */
class EkomiFeedbackCron extends Cron {

    use Loggable;

    /**
     *
     * @var $ekomiServices 
     */
    private $ekomiServices;

    public function __construct(EkomiServices $ekomiService) {
        $this->ekomiServices = $ekomiService;
    }

    public function handle() {
        $this->getLogger(__FUNCTION__)->error('Cron Running-clientstore-2...', 'CronRunning...:');

        $this->ekomiServices->sendOrdersData();
        /**
         * Fetch the product reviews if first time then range=all else range=1w
         */
        $this->ekomiServices->fetchProductReviews($range = '1w');
    }

}
