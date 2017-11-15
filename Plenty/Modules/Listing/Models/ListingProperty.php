<?php
namespace Plenty\Modules\Listing\Models;


/**
 * The listing properties model. Each listing property has a type.
 */
abstract class ListingProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$listingId;
	public		$typeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$listing;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}