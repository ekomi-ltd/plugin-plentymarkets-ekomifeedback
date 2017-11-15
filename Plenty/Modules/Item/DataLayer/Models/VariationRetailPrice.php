<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationRetailPrice
 */
abstract class VariationRetailPrice 
{
	public		$priceId;
	public		$price;
	public		$retailPriceNet;
	public		$basePrice;
	public		$basePriceNet;
	public		$unitPrice;
	public		$unitPriceNet;
	public		$orderParamsMarkup;
	public		$orderParamsMarkupNet;
	public		$classRebatePercent;
	public		$classRebate;
	public		$classRebateNet;
	public		$categoryRebatePercent;
	public		$categoryRebate;
	public		$categoryRebateNet;
	public		$vatId;
	public		$vatValue;
	public		$currency;
	public		$exchangeRatio;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}