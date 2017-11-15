<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The DebtorAccountValue Model which contains the actual configured debtor accounts by character, payment and country.
 */
abstract class DebtorAccount 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$accountId;
	public		$mode;
	public		$key;
	public		$value;
	public		$account;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}