<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item model. Items, shipping costs, coupons, surcharges etc. are all displayed as order items.
 */
abstract class OrderItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$referrerId;
	public		$itemVariationId;
	public		$quantity;
	public		$orderItemName;
	public		$attributeValues;
	public		$shippingProfileId;
	public		$countryVatId;
	public		$vatField;
	public		$vatRate;
	public		$position;
	public		$warehouseId;
	public		$createdAt;
	public		$updatedAt;
	public		$systemAmount;
	public		$amount;
	public		$order;
	public		$type;
	public		$countryVat;
	public		$variation;
	public		$amounts;
	public		$properties;
	public		$orderProperties;
	public		$orderDates;
	public		$dates;
	public		$references;
	public		$giftCardCodes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}