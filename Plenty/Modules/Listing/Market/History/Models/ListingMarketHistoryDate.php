<?php
namespace Plenty\Modules\Listing\Market\History\Models;


/**
 * The listing market history dates model. Each listing market history date has a type.
 */
abstract class ListingMarketHistoryDate 
{
	public		$id;
	public		$historyId;
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