<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationMarketStatus
 */
abstract class VariationMarketStatus 
{
	public		$id;
	public		$marketId;
	public		$marketAccountId;
	public		$initialSku;
	public		$sku;
	public		$parentSku;
	public		$active;
	public		$createdTimestamp;
	public		$lastExportTimestamp;
	public		$deletedTimestamp;
	public		$marketStatus;
	public		$additionalInformation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}