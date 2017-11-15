<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * ItemShippingProfiles
 */
abstract class ItemShippingProfiles 
{
	public		$id;
	public		$name;
	public		$backendName;
	public		$tags;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}