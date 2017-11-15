<?php
namespace Plenty\Modules\Item\VariationClient\Models;


/**
 * Variation Client
 */
abstract class VariationClient 
{

	const CREATED_AT = 'plenty_item_variation_link_webstore_created';

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'updatedAt';
	public		$variationId;
	public		$plentyId;
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