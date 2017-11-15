<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface StatementInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}