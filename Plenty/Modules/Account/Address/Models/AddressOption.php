<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address options model
 */
abstract class AddressOption 
{

	const TYPE_VAT_NUMBER = 1;

	const TYPE_EXTERNAL_ID = 2;

	const TYPE_ENTRY_CERTIFICATE = 3;

	const TYPE_TELEPHONE = 4;

	const TYPE_EMAIL = 5;

	const TYPE_POST_NUMBER = 6;

	const TYPE_PERSONAL_NUMBER = 7;

	const TYPE_FSK = 8;

	const TYPE_BIRTHDAY = 9;

	const TYPE_SESSION_ID = 10;

	const TYPE_TITLE = 11;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$addressId;
	public		$typeId;
	public		$value;
	public		$position;
	public		$address;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}