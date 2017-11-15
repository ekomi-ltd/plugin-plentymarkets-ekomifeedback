<?php
namespace Plenty\Modules\Listing\Market\Models;


/**
 * The listing market model.
 */
abstract class ListingMarket 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingId;
	public		$variationId;
	public		$referrerId;
	public		$credentialsId;
	public		$directoryId;
	public		$enabled;
	public		$duration;
	public		$verified;
	public		$quantity;
	public		$allVariations;
	public		$createdAt;
	public		$updatedAt;
	public		$listing;
	public		$properties;
	public		$itemSpecifics;
	public		$prices;
	public		$dates;
	public		$texts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}