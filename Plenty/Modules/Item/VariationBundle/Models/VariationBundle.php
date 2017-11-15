<?php
namespace Plenty\Modules\Item\VariationBundle\Models;


/**
 * The variation bundle
 */
abstract class VariationBundle 
{

	const CREATED_AT = 'plenty_item_variation_bundle_created_timestamp';

	const UPDATED_AT = 'plenty_item_variation_bundle_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$id;
	public		$variationId;
	public		$componentVariationId;
	public		$componentQuantity;
	public		$lastUpdatedTimestamp;
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