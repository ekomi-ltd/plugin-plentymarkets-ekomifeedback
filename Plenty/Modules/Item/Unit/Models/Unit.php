<?php
namespace Plenty\Modules\Item\Unit\Models;


/**
 * The unit model including the unit name
 */
abstract class Unit 
{

	const UPDATED_AT = 'plenty_unit_update_timestamp';

	const CREATED_AT = 'plenty_unit_created_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$id;
	public		$position;
	public		$unitOfMeasurement;
	public		$isDecimalPlacesAllowed;
	public		$updatedAt;
	public		$createdAt;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}