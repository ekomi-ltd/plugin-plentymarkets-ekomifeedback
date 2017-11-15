<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


abstract class SalesPriceReferrer 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$salesPriceId;
	public		$referrerId;
	public		$createdAt;
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