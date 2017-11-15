<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
interface AggregationInterface 
{

	public function addSource(
		SourceInterface $source
	);

	public function process(
		array $data
	);

	public function getName(
	):string;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}