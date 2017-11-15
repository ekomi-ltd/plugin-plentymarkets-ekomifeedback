<?php
namespace Plenty\Modules\Order\Currency\Models;


/**
 * The currency model. The model includes information like the ISO 4217 code and the related currency symbols as well as the countries that a currency is used in.
 */
abstract class Currency 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$currency;
	public		$htmlCode;
	public		$unicodeSign;
	public		$isActive;
	public		$isErasable;
	public		$countries;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}