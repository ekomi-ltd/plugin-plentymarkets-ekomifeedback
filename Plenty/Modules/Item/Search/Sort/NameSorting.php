<?php
namespace Plenty\Modules\Item\Search\Sort;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\BaseSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;

/**
 * To be written
 */
abstract class NameSorting implements SortingInterface

{

	abstract public function toArray(
	):array;

}