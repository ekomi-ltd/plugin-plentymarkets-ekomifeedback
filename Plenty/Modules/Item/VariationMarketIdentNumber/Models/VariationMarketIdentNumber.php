<?php
namespace Plenty\Modules\Item\VariationMarketIdentNumber\Models;


/**
 * Variation Market Ident Number
 */
abstract class VariationMarketIdentNumber 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$variationId;
	public		$countryId;
	public		$type;
	public		$position;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}