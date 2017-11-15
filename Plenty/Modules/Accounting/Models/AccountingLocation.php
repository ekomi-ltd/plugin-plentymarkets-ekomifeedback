<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The accounting location model. An accounting location always has a country and belongs to a client. An accounting location contains the VAT configurations. The VAT model contains the VAT configuration.
 */
abstract class AccountingLocation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$countryId;
	public		$name;
	public		$clientId;
	public		$plentyId;
	public		$vats;
	public		$country;
	public		$client;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}