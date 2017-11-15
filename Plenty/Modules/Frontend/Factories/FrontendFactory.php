<?php
namespace Plenty\Modules\Frontend\Factories;

use Plenty\Modules\Frontend\Services\AccountService;
use Plenty\Modules\Frontend\Services\AgentService;
use Plenty\Modules\Frontend\Services\FileService;
use Plenty\Modules\Frontend\Services\LocaleService;
use Plenty\Modules\Frontend\Services\SystemService;

/**
 * Frontend-Factory
 */
abstract class FrontendFactory 
{

	abstract public function getLocale(
	):LocaleService;

	abstract public function getAgent(
	):AgentService;

	abstract public function getSystem(
	):SystemService;

	abstract public function getAccount(
	):AccountService;

	abstract public function getFile(
	):FileService;

}