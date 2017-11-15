<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationStandardCategory
 */
abstract class VariationStandardCategory 
{
	public		$categoryId;
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