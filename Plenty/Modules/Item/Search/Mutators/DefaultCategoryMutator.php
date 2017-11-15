<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\NestedMutator;

abstract class DefaultCategoryMutator 
{

	abstract public function getPath(
	):string;

	abstract public function mutateRow(
		array $data, 
		 $key
	):array;

	abstract public function setPlentyId(
		int $plentyId
	):DefaultCategoryMutator;

	abstract public function getDependencies(
	):array;

	abstract public function mutate(
		array $data
	):array;

}