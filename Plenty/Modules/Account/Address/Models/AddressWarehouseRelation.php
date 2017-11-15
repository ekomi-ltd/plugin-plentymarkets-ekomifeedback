<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The AddressWarehouseRelation model
 */
abstract class AddressWarehouseRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$warehouseId;
	public		$typeId;
	public		$addressId;
	public		$address;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}