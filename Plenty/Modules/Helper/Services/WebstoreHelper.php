<?php
namespace Plenty\Modules\Helper\Services;

use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Webstore Helper Service
 */
abstract class WebstoreHelper 
{

	abstract public function getCurrentWebstoreConfiguration(
	):WebstoreConfiguration;

}