<?php
namespace Plenty\Modules\Listing\Market\Text\Models;


/**
 * The listing market text model.
 */
abstract class ListingMarketText 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingMarketId;
	public		$lang;
	public		$title;
	public		$subtitle;
	public		$description;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}