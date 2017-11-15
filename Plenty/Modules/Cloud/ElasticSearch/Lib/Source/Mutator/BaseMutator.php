<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator;


/**
 * to be written
 */
abstract class BaseMutator 
{

	abstract public function getDependencies(
	):array;

	abstract public function mutate(
		array $data
	):array;

}