<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The revenue account model provides information on a single revenue account. The ID of an account matches the ID of a VAT rate.
 */
abstract class RevenueAccount 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
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