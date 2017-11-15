<?php
namespace Plenty\Modules\Helper\Services;

use Plenty\Modules\Helper\Models\KeyValue;

/**
 * helper class for arrays
 */
abstract class ArrayHelper 
{

	abstract public function buildMapFromObjectList(
		 $list, 
		string $keyField, 
		string $valueField
	):KeyValue;

}