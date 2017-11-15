<?php
namespace Plenty\Modules\Item\ItemProperty\Models;


/**
 * ItemPropertyValue
 */
abstract class ItemProperty 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$itemId;
	public		$propertyId;
	public		$propertySelectionId;
	public		$valueInt;
	public		$valueFloat;
	public		$valueFile;
	public		$surcharge;
	public		$property;
	public		$propertySelection;
	public		$valueTexts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}