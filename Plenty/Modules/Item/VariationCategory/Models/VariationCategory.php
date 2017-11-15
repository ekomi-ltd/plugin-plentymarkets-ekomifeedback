<?php
namespace Plenty\Modules\Item\VariationCategory\Models;


/**
 * Variation Category
 */
abstract class VariationCategory 
{

	const UPDATED_AT = 'plenty_item_variation_category_link_last_update_timestamp';

	const CREATED_AT = 'plenty_item_variation_category_link_created_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$variationId;
	public		$categoryId;
	public		$position;
	public		$isNeckermannPrimary;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}