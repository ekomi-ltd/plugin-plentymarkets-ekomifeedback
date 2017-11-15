<?php
namespace Plenty\Modules\Item\ItemProperty\Models;


/**
 * The ItemPropertyValueText
 */
abstract class ItemPropertyValueText 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$valueId;
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