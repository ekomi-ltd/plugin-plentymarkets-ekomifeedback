<?php
namespace Plenty\Modules\Listing\Price\Models;


/**
 * The listing price type model.
 */
abstract class ListingPriceType 
{

	const START_PRICE = 1;

	const FIXED_PRICE = 2;

	const RESERVED_PRICE = 3;

	const SCO_MIN_PRICE = 4;

	const MARKET_FEE = 5;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
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