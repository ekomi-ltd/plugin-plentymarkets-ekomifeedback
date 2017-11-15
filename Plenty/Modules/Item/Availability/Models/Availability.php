<?php
namespace Plenty\Modules\Item\Availability\Models;


/**
 * The item availability model
 */
abstract class Availability 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$icon;
	public		$averageDays;
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