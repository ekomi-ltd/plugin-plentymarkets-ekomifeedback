<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item type model.
 */
abstract class OrderItemType 
{

	const TYPE_VARIATION = 1;

	const TYPE_ITEM_BUNDLE = 2;

	const TYPE_BUNDLE_COMPONENT = 3;

	const TYPE_PROMOTIONAL_COUPON = 4;

	const TYPE_GIFT_CARD = 5;

	const TYPE_SHIPPING_COSTS = 6;

	const TYPE_PAYMENT_SURCHARGE = 7;

	const TYPE_GIFT_WRAP = 8;

	const TYPE_UNASSIGEND_VARIATION = 9;

	const TYPE_DEPOSIT = 10;

	const TYPE_ORDER = 11;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}