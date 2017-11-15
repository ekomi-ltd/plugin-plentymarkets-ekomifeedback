<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * Filters
 */
abstract class Filters 
{

	abstract public function generateFilters(
		array $formatSettings = []
	):array;

}