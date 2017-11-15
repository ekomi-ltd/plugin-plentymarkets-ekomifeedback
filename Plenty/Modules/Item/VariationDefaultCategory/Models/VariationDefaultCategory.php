<?php
namespace Plenty\Modules\Item\VariationDefaultCategory\Models;


/**
 * Variation Default Category
 */
abstract class VariationDefaultCategory 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$variationId;
	public		$branchId;
	public		$plentyId;
	public		$manually;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}