<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class BaseProcessor 
{

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function process(
		array $data
	):array;

	abstract public function getDependencies(
	):array;

}