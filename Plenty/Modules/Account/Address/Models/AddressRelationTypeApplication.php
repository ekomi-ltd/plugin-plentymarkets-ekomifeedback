<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The AddressRelationTypeApplication model
 */
abstract class AddressRelationTypeApplication 
{

	const APPLICATION_CONTACT = 'contact';

	const APPLICATION_ORDER = 'order';

	const APPLICATION_WAREHOUSE = 'warehouse';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$application;
	public		$position;
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