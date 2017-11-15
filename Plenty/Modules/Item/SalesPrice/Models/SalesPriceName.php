<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


abstract class SalesPriceName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$salesPriceId;
	public		$lang;
	public		$nameInternal;
	public		$nameExternal;
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