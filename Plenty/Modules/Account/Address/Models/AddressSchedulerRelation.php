<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The AddressSchedulerRelation model
 */
abstract class AddressSchedulerRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$schedulerId;
	public		$typeId;
	public		$addressId;
	public		$scheduler;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}