<?php
namespace Plenty\Modules\Order\Shipping\ParcelServiceRegion\Models;


/**
 * The parcel service region name model.
 */
abstract class ParcelServiceRegionName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
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