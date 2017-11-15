<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationSupplier
 */
abstract class VariationSupplier 
{
	public		$createdTimestamp;
	public		$deliveryTimeInDays;
	public		$discount;
	public		$discountable;
	public		$id;
	public		$itemNumber;
	public		$itemVariationId;
	public		$lastPriceQuery;
	public		$lastUpdateTimestamp;
	public		$minimumOrderValue;
	public		$packagingUnit;
	public		$purchasePrice;
	public		$supplierId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}