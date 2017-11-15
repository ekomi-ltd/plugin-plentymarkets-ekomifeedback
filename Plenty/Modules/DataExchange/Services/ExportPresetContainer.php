<?php
namespace Plenty\Modules\DataExchange\Services;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\DataExchange\Contracts\Generator;
use Plenty\Modules\DataExchange\Contracts\PluginGenerator;
use Plenty\Modules\DataExchange\Contracts\ResultFields;
use Plenty\Modules\DataExchange\Models\ExportPreset;

/**
 * Register export presets
 */
abstract class ExportPresetContainer 
{

	abstract public function add(
		string $exportKey, 
		string $resultFieldsClass, 
		string $generatorClass, 
		string $filterClass = "", 
		bool $isPlugin = false, 
		bool $generatorExecute = false, 
		string $exportType = "item"
	);

}