<?php
namespace Plenty\Modules\Listing\Market\Models;


/**
 * The listing market dates model. Each listing market date has a type.
 */
abstract class ListingMarketDate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$typeId;
	public		$date;
	public		$createdAt;
	public		$updatedAt;
	public		$listingMarket;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}