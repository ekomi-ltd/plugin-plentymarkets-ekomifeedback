<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;

/**
 * To be written
 */
interface SuggestionInterface 
{

	public function setText(
		string $text
	):self;

	public function process(
		array $data
	):array;

	public function getName(
	):string;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}