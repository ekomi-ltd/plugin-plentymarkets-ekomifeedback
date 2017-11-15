<?php
namespace Plenty\Modules\Item\Search\Suggestions;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\SuggestionProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class SearchSuggestionProcessor implements ProcessorInterface

{

	abstract public function process(
		array $data
	):array;

	abstract public function getDependencies(
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):self;

}