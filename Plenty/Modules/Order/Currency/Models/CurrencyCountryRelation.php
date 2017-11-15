<?php
namespace Plenty\Modules\Order\Currency\Models;


/**
 * The CurrencyCountryRelation model indicates which currency is related to which country.
 */
abstract class CurrencyCountryRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$currency;
	public		$countryId;
	public		$country;
	public		$currencyInstance;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}