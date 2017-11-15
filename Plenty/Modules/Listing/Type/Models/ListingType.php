<?php
namespace Plenty\Modules\Listing\Type\Models;


/**
 * The listing type model.
 */
abstract class ListingType 
{

	const TYPE_AUCTION = 1;

	const TYPE_FIXED = 2;

	const TYPE_SHOP = 3;

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
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