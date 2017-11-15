<?php
namespace Plenty\Modules\Listing\Type\Models;


/**
 * The listing type name model.
 */
abstract class ListingTypeName 
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