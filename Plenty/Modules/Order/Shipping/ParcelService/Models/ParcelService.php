<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Model
 */
abstract class ParcelService 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}