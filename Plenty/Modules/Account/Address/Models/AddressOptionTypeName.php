<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The AddressOptionTypeName model
 */
abstract class AddressOptionTypeName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
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