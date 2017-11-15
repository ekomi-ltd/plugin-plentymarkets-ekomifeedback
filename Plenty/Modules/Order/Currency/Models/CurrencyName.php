<?php
namespace Plenty\Modules\Order\Currency\Models;


/**
 * The currency name model.
 */
abstract class CurrencyName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$currency;
	public		$lang;
	public		$name;
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