<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The debtor account configuration model. The configuration is a set of debtor accounts. The actual number of debtor accounts within the configuration depends on the mode used to assign pending amounts to debtor accounts.
 */
abstract class DebtorAccountConfiguration 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$locationId;
	public		$mode;
	public		$sequence;
	public		$standard;
	public		$save;
	public		$accounts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}