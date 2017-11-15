<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order amount model.
 */
abstract class OrderAmount 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$isSystemCurrency;
	public		$isNet;
	public		$currency;
	public		$exchangeRate;
	public		$netTotal;
	public		$grossTotal;
	public		$vatTotal;
	public		$invoiceTotal;
	public		$paidAmount;
	public		$prepaidAmount;
	public		$giftCardAmount;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	public		$vats;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}