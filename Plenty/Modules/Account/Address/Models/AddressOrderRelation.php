<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * address order relation model
 */
abstract class AddressOrderRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$addressId;
	public		$address;
	public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}