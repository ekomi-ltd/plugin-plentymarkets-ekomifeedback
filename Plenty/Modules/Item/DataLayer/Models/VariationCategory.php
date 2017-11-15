<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationCategory
 */
abstract class VariationCategory 
{
	public		$categoryId;
	public		$position;
	public		$neckermannPrimary;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}