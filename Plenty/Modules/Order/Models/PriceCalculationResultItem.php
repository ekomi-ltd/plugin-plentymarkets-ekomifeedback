<?php
namespace Plenty\Modules\Order\Models;


/**
 * price calculation result item
 */
abstract class PriceCalculationResultItem 
{
	public		$total;
	public		$totalNet;
	public		$totalGross;
	public		$totalVat;
	public		$highestVatId;
	public		$netAmountsMap;
	public		$vatAmountsMap;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}