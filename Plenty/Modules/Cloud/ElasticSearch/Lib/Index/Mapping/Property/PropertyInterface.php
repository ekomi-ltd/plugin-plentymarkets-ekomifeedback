<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Mapping\Property;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface PropertyInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}