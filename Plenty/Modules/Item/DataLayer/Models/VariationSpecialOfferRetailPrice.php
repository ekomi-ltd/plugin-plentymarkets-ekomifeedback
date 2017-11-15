<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationSpecialOfferRetailPrice
 */
abstract class VariationSpecialOfferRetailPrice 
{
	public		$retailPriceId;
	public		$retailPrice;
	public		$retailPriceNet;
	public		$basePrice;
	public		$basePriceNet;
	public		$unitPrice;
	public		$unitPriceNet;
	public		$orderParamsMarkup;
	public		$orderParamsMarkupNet;
	public		$vatId;
	public		$vatValue;
	public		$currency;
	public		$exchangeRatio;
	public		$lastUpdateTimestamp;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}