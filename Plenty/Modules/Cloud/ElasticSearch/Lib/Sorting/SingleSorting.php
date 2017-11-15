<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;

/**
 * To be written
 */
abstract class SingleSorting implements SortingInterface

{

	abstract public function toArray(
	):array;

}