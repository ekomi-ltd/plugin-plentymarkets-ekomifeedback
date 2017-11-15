<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BaseMutator;

abstract class FacetMutator 
{

	abstract public function mutate(
		array $data
	):array;

	abstract public static function facetSort(
		array $a, 
		array $b
	):int;

	abstract public function getDependencies(
	):array;

}