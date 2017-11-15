<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\ObjectMutator;

abstract class SkuMutator 
{

	abstract public function getPath(
	):string;

	abstract public function mutateObject(
		array $data
	):array;

	abstract public function setMarket(
		int $marketId
	):self;

	abstract public function setAccount(
		int $accountId
	):self;

	abstract public function getDependencies(
	):array;

	abstract public function mutate(
		array $data
	):array;

}