<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address POS relation model
 */
abstract class AddressPosRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$posBaseId;
	public		$addressId;
	public		$typeId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}