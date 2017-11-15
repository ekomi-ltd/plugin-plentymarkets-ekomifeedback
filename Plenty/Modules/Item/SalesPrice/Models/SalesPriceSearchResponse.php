<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


/**
 * foo
 */
abstract class SalesPriceSearchResponse 
{
	public		$salesPriceId;
	public		$price;
	public		$priceNet;
	public		$basePrice;
	public		$basePriceNet;
	public		$unitPrice;
	public		$unitPriceNet;
	public		$customerClassDiscountPercent;
	public		$customerClassDiscount;
	public		$customerClassDiscountNet;
	public		$categoryDiscountPercent;
	public		$categoryDiscount;
	public		$categoryDiscountNet;
	public		$vatId;
	public		$vatValue;
	public		$currency;
	public		$conversionFactor;
	public		$minimumOrderQuantity;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}