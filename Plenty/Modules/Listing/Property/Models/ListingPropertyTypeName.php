<?php
namespace Plenty\Modules\Listing\Property\Models;


/**
 * The listing property type name model.
 */
abstract class ListingPropertyTypeName 
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