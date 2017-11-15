<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationBundleComponent
 */
abstract class VariationBundleComponent 
{
	public		$componentVariationId;
	public		$componentQuantity;
	public		$CreatedTimestamp;
	public		$LastUpdateTimestamp;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}