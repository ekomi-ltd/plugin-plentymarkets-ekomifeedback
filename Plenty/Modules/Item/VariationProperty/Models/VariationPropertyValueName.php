<?php
namespace Plenty\Modules\Item\VariationProperty\Models;


/**
 * The property name of the variation
 */
abstract class VariationPropertyValueName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyValueId;
	public		$lang;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}