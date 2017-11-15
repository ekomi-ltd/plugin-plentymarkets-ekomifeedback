<?php
namespace Plenty\Modules\Item\Manufacturer\Models;


/**
 * The item manufacturer commission model
 */
abstract class ManufacturerCommission 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$manufacturerId;
	public		$plentyId;
	public		$referrerId;
	public		$commission;
	public		$manufacturer;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}