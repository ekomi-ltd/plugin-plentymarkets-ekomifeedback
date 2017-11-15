<?php
namespace Carbon;

use Carbon\Exceptions\InvalidDateException;
use Closure;
use DatePeriod;
use DateTime;
use DateTimeZone;
use InvalidArgumentException;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;

class Carbon extends \DateTime 

{
	public		$year;
	public		$yearIso;
	public		$month;
	public		$day;
	public		$hour;
	public		$minute;
	public		$second;
	public		$timestamp;
	public		$timezone;
	public		$tz;
	
}