<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The OrderPropertyType model. Each order property must have a property type. An order can have one property of each property type. The default property types provided by plentymarkets are listed here.
 */
abstract class OrderPropertyType 
{

	const WAREHOUSE = 1;

	const SHIPPING_PROFILE = 2;

	const PAYMENT_METHOD = 3;

	const PAYMENT_STATUS = 4;

	const EXTERNAL_SHIPPING_PROFILE = 5;

	const DOCUMENT_LANGUAGE = 6;

	const EXTERNAL_ORDER_ID = 7;

	const CUSTOMER_SIGN = 8;

	const DUNNING_LEVEL = 9;

	const SELLER_ACCOUNT = 10;

	const WEIGHT = 11;

	const WIDTH = 12;

	const LENGTH = 13;

	const HEIGHT = 14;

	const FLAG = 15;

	const EXTERNAL_TOKEN_ID = 16;

	const EXTERNAL_ITEM_ID = 17;

	const COUPON_CODE = 18;

	const COUPON_TYPE = 19;

	const ORIGINAL_WAREHOUSE = 20;

	const ORIGINAL_QUANTITY = 21;

	const CATEGORY_ID = 22;

	const MARKET_FEE = 23;

	const STOCK_REVERSING = 24;

	const DISPUTE_STATUS = 25;

	const NO_CHANGE_BY_CONTACT = 26;

	const INTERVAL_TYP = 27;

	const INTERVAL_VALUE = 28;

	const SIZE = 29;

	const LOCATION_RESERVED = 30;

	const EXTERNAL_ITEM_SHIPMENT_ID = 31;

	const PARTIAL_SHIPPING_COSTS = 32;

	const MAIN_DOCUMENT_NUMBER = 33;

	const SALES_TAX_ID_NUMBER = 34;

	const RETURNS_REASON = 35;

	const RETURNS_ITEM_STATUS = 36;

	const FULFILLMENT_CENTER_ID = 37;

	const FULFILLMENT_CENTER_COUNTRY_ISO = 38;

	const REORDER_ITEM_ID = 39;

	const LISTING_TYPE = 40;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
	public		$cast;
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