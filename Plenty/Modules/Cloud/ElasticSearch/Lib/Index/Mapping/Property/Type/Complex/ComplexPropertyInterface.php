<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Mapping\Property\Type\Complex;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Mapping\Property\PropertyInterface;

/**
 * to be written
 */
interface ComplexPropertyInterface 
{

	public function getProperties(
	):array;

	public function addProperty(
		PropertyInterface $property
	);

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}