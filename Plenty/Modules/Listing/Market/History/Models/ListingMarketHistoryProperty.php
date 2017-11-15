<?php
namespace Plenty\Modules\Listing\Market\History\Models;


/**
 * The listing market properties model. Each listing market property has a type.
 */
abstract class ListingMarketHistoryProperty 
{
	public		$id;
	public		$historyId;
	public		$typeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$history;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}