<?php
namespace Plenty\Modules\Item\VariationSku\Models;


/**
 * The variation SKU model
 */
abstract class VariationSku 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$variationId;
	public		$marketId;
	public		$accountId;
	public		$initialSku;
	public		$sku;
	public		$parentSku;
	public		$isActive;
	public		$createdAt;
	public		$updatedAt;
	public		$exportedAt;
	public		$stockUpdatedAt;
	public		$deletedAt;
	public		$status;
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