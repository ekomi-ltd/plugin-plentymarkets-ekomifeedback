<?php
namespace Plenty\Modules\Item\VariationImage\Models;


abstract class VariationImage 
{

	const CREATED_AT = 'plenty_item_variation_link_image_created';

	const UPDATED_AT = 'plenty_item_variation_link_image_updated';
	public		$id;
	public		$itemId;
	public		$variationId;
	public		$imageId;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}