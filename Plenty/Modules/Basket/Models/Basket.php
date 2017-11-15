<?php
namespace Plenty\Modules\Basket\Models;


/**
 * The basket model
 */
abstract class Basket 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$sessionId;
	public		$orderId;
	public		$customerId;
	public		$customerInvoiceAddressId;
	public		$customerShippingAddressId;
	public		$currency;
	public		$referrerId;
	public		$shippingCountryId;
	public		$methodOfPaymentId;
	public		$shippingProviderId;
	public		$shippingProfileId;
	public		$itemSum;
	public		$itemSumNet;
	public		$basketAmount;
	public		$basketAmountNet;
	public		$shippingAmount;
	public		$shippingAmountNet;
	public		$paymentAmount;
	public		$couponCode;
	public		$couponDiscount;
	public		$shippingDeleteByCoupon;
	public		$basketRebate;
	public		$basketRebateType;
	public		$maxFsk;
	public		$orderTimestamp;
	public		$createdAt;
	public		$updatedAt;
	public		$basketItems;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}