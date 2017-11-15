<?php
namespace Plenty\Modules\Frontend\Services;

use Plenty\Modules\Frontend\Events\FrontendLanguageChanged;

/**
 * frontend service for changing current language
 */
abstract class LocaleService 
{

	abstract public function setLanguage(
		string $newLanguage, 
		bool $fireEvents = true
	);

}