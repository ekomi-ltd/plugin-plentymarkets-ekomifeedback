<?php
namespace Plenty\Modules\Listing\Market\History\Models;


/**
 * The listing market history model.
 */
abstract class ListingMarketHistoryVariation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$historyId;
	public		$variationId;
	public		$attributeName;
	public		$sku;
	public		$quantity;
	public		$quantitySold;
	public		$quantitySoldDelta;
	public		$quantityRemain;
	public		$price;
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