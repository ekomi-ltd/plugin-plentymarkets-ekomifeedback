<?php
namespace Plenty\Modules\Listing\Market\Models;


/**
 * The listing market price model.
 */
abstract class ListingMarketPrice 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$typeId;
	public		$value;
	public		$listingMarket;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}