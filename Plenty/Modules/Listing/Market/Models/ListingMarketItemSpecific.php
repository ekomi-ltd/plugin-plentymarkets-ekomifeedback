<?php
namespace Plenty\Modules\Listing\Market\Models;


/**
 * The listing market item specific model.
 */
abstract class ListingMarketItemSpecific 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$name;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}