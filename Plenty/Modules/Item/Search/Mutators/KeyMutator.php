<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\GlobalMutator;

abstract class KeyMutator 
{

	abstract public function getKeyList(
	):array;

	abstract public function setKeyList(
		 $keyList
	);

	abstract public function getNestedKeyList(
	);

	abstract public function setNestedKeyList(
		 $nestedKeyList
	);

	abstract public function mutate(
		array $data
	):array;

	abstract public function getDependencies(
	):array;

}