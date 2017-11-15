<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyMarketReference including Property
 */
abstract class PropertyMarketReference 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyId;
	public		$componentId;
	public		$marketId;
	public		$externalComponent;
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