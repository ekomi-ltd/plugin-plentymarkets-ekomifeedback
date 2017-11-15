<?php
namespace Plenty\Modules\Order\Coupon\Code\Validation\Models;


/**
 * The CouponCodeValidation data model contains all data necessary for validating a coupon.
 */
abstract class CouponCodeValidation 
{

	const VALIDATION_TYPE_PLENTY = 'plenty';

	const GUI_EXCEPTION_MIN_ORDER_VALUE_NOT_REACHED = 18;

	const GUI_EXCEPTION_NOT_USABLE_FOR_SPECIAL_OFFER = 51;

	const GUI_EXCEPTION_ALREADY_USED_OR_INVALID_COUPON_CODE = 70;

	const GUI_EXCEPTION_CAMPAIGN_EXPIRED = 78;

	const GUI_EXCEPTION_NO_MATCHING_ITEM_IN_BASKET = 126;

	const GUI_EXCEPTION_COUPON_ONLY_SUBSCRIPTION = 329;

	const GUI_EXCEPTION_COUPON_ONLY_SINGLE_USAGE = 330;

	const GUI_EXCEPTION_NO_OPEN_AMOUNT = 331;

	const GUI_EXCEPTION_EXPIRED = 332;

	const GUI_EXCEPTION_COUPON_ONLY_FOR_NEW_CUSTOMERS = 334;

	const GUI_EXCEPTION_COUPON_ONLY_FOR_EXISTING_CUSTOMERS = 335;

	const GUI_EXCEPTION_COUPON_WRONG_CUSTOMER_GROUP = 336;

	const GUI_EXCEPTION_COUPON_WRONG_CUSTOMER_TYPE = 337;

	const GUI_EXCEPTION_COUPON_NO_CUSTOMER_TYPE_PROVIDED = 338;

	const GUI_EXCEPTION_COUPON_NO_CUSTOMER_TYPE_ACTIVATED = 339;

	const GUI_EXCEPTION_COUPON_NO_CUSTOMER_GROUP_ACTIVATED = 340;

	const GUI_EXCEPTION_CAMPAIGN_NO_WEBSTORE_ACTIVATED = 341;

	const GUI_EXCEPTION_CAMPAIGN_WRONG_WEBSTORE_ID = 342;

	const GUI_EXCEPTION_CAMPAIGN_NO_WEBSTORE_ID_GIVEN = 343;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$campaignId;
	public		$validationType;
	public		$items;
	public		$contactId;
	public		$couponCode;
	public		$currency;
	public		$referrer;
	public		$salesDiscount;
	public		$salesDiscountNet;
	public		$itemDiscount;
	public		$itemDiscountNet;
	public		$shippingDiscount;
	public		$shippingDiscountNet;
	public		$usedVatFields;
	public		$restCouponAmount;
	public		$checkedItems;
	public		$validateParams;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}