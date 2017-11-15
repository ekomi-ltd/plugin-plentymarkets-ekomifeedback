<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The contact address type model
 */
abstract class AddressRelationType 
{

	const BILLING_ADDRESS = 1;

	const DELIVERY_ADDRESS = 2;

	const SENDER_ADDRESS = 3;

	const RETURN_ADDRESS = 4;

	const CLIENT_ADDRESS = 5;

	const CONTRACTOR_ADDRESS = 6;

	const WAREHOUSE_ADDRESS = 7;

	const POS_ADDRESS = 8;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$application;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}