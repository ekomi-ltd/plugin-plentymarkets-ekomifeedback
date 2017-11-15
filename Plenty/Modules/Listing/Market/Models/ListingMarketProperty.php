<?php
namespace Plenty\Modules\Listing\Market\Models;


/**
 * The listing market properties model. Each listing market property has a type.
 */
abstract class ListingMarketProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$typeId;
	public		$value;
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