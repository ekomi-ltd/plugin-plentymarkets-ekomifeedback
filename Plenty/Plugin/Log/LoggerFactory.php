<?php
namespace Plenty\Plugin\Log;

use Plenty\Log\Contracts\LoggerContract;
use Plenty\Log\Factories\LoggerFactory as PlentyLoggerFactory;
use Plenty\Modules\Plugin\Services\PluginMonitor;

/**
 * Logger factory
 */
abstract class LoggerFactory 
{

	abstract public function getLogger(
		string $pluginNamespace, 
		string $identifier
	):LoggerContract;

}