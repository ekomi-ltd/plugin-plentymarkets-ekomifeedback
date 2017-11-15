<?php
namespace Plenty\Modules\Order\Shipping\ParcelServiceRegion\Models;


/**
 * The parcel service region model.
 */
abstract class ParcelServiceRegion 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$shippingRegionId;
	public		$parcelServicePresetId;
	public		$shippingRegionName;
	public		$serviceType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}