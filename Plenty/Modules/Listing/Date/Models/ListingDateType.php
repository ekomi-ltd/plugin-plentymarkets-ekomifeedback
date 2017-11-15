<?php
namespace Plenty\Modules\Listing\Date\Models;


/**
 * The listing date type model. Each listing date type can have multiple names.
 */
abstract class ListingDateType 
{

	const LAST_PRICE_CHANGE = 1;

	const LAST_LISTING_ATTEMPT = 2;

	const START_TIME = 3;

	const END_TIME = 4;

	const LAST_MARKET_UPDATE = 5;

	const LAST_SALE = 6;

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