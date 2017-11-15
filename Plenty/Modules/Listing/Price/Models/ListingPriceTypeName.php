<?php
namespace Plenty\Modules\Listing\Price\Models;


/**
 * The listing price type name model.
 */
abstract class ListingPriceTypeName 
{
	public		$id;
	public		$typeId;
	public		$name;
	public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}