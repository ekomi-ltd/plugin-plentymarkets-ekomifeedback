<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * ItemCrossSelling
 */
abstract class ItemCrossSelling 
{
	public		$itemId;
	public		$crossItemId;
	public		$relationship;
	public		$dynamic;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}