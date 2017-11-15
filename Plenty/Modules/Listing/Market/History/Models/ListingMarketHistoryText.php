<?php
namespace Plenty\Modules\Listing\Market\History\Models;


/**
 * The listing market history text model.
 */
abstract class ListingMarketHistoryText 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$historyId;
	public		$lang;
	public		$title;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}