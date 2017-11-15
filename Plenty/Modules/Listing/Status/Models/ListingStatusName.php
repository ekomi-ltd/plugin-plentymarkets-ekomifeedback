<?php
namespace Plenty\Modules\Listing\Status\Models;


/**
 * The listing status name model.
 */
abstract class ListingStatusName 
{
	public		$id;
	public		$statusId;
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