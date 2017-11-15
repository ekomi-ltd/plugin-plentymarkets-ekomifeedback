<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


abstract class SalesPrice 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$minimumOrderQuantity;
	public		$type;
	public		$isCustomerPrice;
	public		$isDisplayedByDefault;
	public		$isLiveConversion;
	public		$createdAt;
	public		$updatedAt;
	public		$names;
	public		$accounts;
	public		$countries;
	public		$currencies;
	public		$customerClasses;
	public		$referrers;
	public		$clients;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}