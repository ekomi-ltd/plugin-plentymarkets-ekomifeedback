<?php
namespace Plenty\Modules\Listing\Market\Info\Models;


/**
 * The listing market info model.
 */
abstract class ListingMarketInfo 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$type;
	public		$code;
	public		$message;
	public		$createdAt;
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