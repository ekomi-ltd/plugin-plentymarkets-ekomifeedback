<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationAttributeValue
 */
abstract class VariationAttributeValue 
{
	public		$attributeId;
	public		$attributeValueId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}