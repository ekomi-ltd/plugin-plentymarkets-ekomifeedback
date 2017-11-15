<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item amount model. Order item amount refers to amounts of money.
 */
abstract class OrderItemAmount 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderItemId;
	public		$isSystemCurrency;
	public		$currency;
	public		$exchangeRate;
	public		$purchasePrice;
	public		$priceOriginalGross;
	public		$priceOriginalNet;
	public		$priceGross;
	public		$priceNet;
	public		$surcharge;
	public		$discount;
	public		$isPercentage;
	public		$createdAt;
	public		$updatedAt;
	public		$orderItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}