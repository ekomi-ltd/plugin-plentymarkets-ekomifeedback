<?php
namespace Plenty\Modules\Listing\Date\Models;


/**
 * The listing date type name model.
 */
abstract class ListingDateTypeName 
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