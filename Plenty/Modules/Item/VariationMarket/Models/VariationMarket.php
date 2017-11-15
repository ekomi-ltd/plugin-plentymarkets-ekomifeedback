<?php
namespace Plenty\Modules\Item\VariationMarket\Models;


/**
 * Variation Market
 */
abstract class VariationMarket 
{

	const CREATED_AT = 'plenty_item_variation_link_marketplace_created';

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'updatedAt';
	public		$variationId;
	public		$marketId;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}