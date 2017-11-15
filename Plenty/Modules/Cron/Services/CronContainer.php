<?php
namespace Plenty\Modules\Cron\Services;

use Plenty\Modules\Cron\Models\Cron;
use Plenty\Modules\Cron\Validators\CronValidator;

/**
 * Register cron jobs
 */
abstract class CronContainer 
{

	const EVERY_FIFTEEN_MINUTES = 15;

	const EVERY_TWENTY_MINUTES = 20;

	const HOURLY = 60;

	const ELASTIC_SEARCH = 30;

	const ELASTIC_EXPORT = 61;

	const DAILY = 1440;

	/**
	 * Use this method to add a handler class and a schedule time for your desired cron event. The action will then be triggered according to the given schedule.
	 */
	abstract public function add(
		int $schedule, 
		string $handlerClass
	);

}