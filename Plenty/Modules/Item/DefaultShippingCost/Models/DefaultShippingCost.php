<?php
namespace Plenty\Modules\Item\DefaultShippingCost\Models;


/**
 * The default shipping cost model
 */
abstract class DefaultShippingCost 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$itemId;
	public		$profileId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}