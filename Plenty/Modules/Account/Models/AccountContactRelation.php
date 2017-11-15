<?php
namespace Plenty\Modules\Account\Models;


/**
 * account contact relation model
 */
abstract class AccountContactRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$accountId;
	public		$contactId;
	public		$account;
	public		$contact;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}