<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationLinkWebstore
 */
abstract class VariationLinkWebstore 
{
	public		$created;
	public		$plentyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}