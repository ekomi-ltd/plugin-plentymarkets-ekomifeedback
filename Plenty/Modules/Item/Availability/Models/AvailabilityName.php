<?php
namespace Plenty\Modules\Item\Availability\Models;


/**
 * The item availability name model
 */
abstract class AvailabilityName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$availabilityId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}