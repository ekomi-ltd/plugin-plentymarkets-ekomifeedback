<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The ContactType model
 */
abstract class ContactType 
{

	const TYPE_CUSTOMER = 1;

	const TYPE_SALES_LEAD = 2;

	const TYPE_SALES_REPRESENTATIVE = 3;

	const TYPE_SUPPLIER = 4;

	const TYPE_PRODUCER = 5;

	const TYPE_PARTNER = 6;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$contacts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}