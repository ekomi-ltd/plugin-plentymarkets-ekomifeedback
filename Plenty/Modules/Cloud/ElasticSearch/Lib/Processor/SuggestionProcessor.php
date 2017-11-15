<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class SuggestionProcessor implements ProcessorInterface

{

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

	abstract public function process(
		array $data
	):array;

}