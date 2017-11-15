<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Document;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * to be written
 */
interface DocumentInterface 
{

	public function getIndex(
	):IndexInterface;

	public function getSize(
	):int;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}