<?php
namespace Plenty\Modules\Item\VariationProperty\Models;

use Plenty\Modules\Item\Property\Models\Property;

/**
 * The VariationPropertyValue
 */
abstract class VariationProperty 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$variationId;
	public		$propertyId;
	public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}