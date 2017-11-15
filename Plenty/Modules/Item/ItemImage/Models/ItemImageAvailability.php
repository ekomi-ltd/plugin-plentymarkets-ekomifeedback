<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * ItemImageAvailability
 */
abstract class ItemImageAvailability 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$imageId;
	public		$type;
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