<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Document;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\BaseSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * foo
 */
abstract class DocumentSearch implements SearchInterface

{

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
	):array;

	abstract public function getQuery(
	):array;

	abstract public function getAggregations(
	):array;

	abstract public function getSuggestions(
	):array;

	abstract public function getSources(
	);

	abstract public function getName(
	);

	abstract public function setName(
		 $name
	);

	abstract public function addFilter(
		TypeInterface $filter
	):self;

	abstract public function addSource(
		SourceInterface $source
	):self;

	abstract public function setSorting(
		SortingInterface $sorting
	):self;

	abstract public function addAggregation(
		AggregationInterface $aggregation
	):self;

	abstract public function addSuggestion(
		SuggestionInterface $suggestion
	):self;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):self;

}