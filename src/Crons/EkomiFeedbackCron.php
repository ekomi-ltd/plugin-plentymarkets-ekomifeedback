<?php

namespace EkomiFeedback\Crons;

use Plenty\Modules\Cron\Contracts\CronHandler as Cron;
use EkomiFeedback\Services\EkomiServices;
use Plenty\Plugin\Log\Loggable;

/**
 * Class EkomiFeedbackCron.
 */
class EkomiFeedbackCron extends Cron
{
    use Loggable;

    /**
     * @var
     */
    private $ekomiServices;

    /**
     * EkomiFeedbackCron constructor.
     *
     * @param EkomiServices $ekomiService
     */
    public function __construct(EkomiServices $ekomiService)
    {
        $this->ekomiServices = $ekomiService;
    }

    /**
     * Handles Cron jobs.
     */
    public function handle()
    {
        $this->getLogger(__FUNCTION__)->error('CronStatus', 'Cron is running...:)');

        $this->ekomiServices->sendOrdersData();
    }
}
