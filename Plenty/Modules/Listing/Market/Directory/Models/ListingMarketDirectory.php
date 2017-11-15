<?php
namespace Plenty\Modules\Listing\Market\Directory\Models;


/**
 * The listing market directory model.
 */
abstract class ListingMarketDirectory 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$parentId;
	public		$level;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}