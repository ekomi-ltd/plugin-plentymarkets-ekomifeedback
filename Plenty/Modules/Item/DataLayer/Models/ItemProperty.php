<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * ItemProperty
 */
abstract class ItemProperty 
{
	public		$itemPropertyId;
	public		$propertyId;
	public		$propertyValue;
	public		$propertyValueType;
	public		$isOrderProperty;
	public		$propertyOrderMarkup;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}