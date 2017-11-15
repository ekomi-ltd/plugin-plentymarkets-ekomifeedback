<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


/**
 * foo
 */
abstract class SalesPriceSearchRequest 
{
	public		$variationId;
	public		$type;
	public		$plentyId;
	public		$customerClassId;
	public		$countryId;
	public		$currency;
	public		$accountId;
	public		$accountType;
	public		$referrerId;
	public		$quantity;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}