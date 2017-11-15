<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Models;


/**
 * The CouponCampaign model contains all information of a campaign.
 */
abstract class CouponCampaign 
{

	const TYPE_PLENTY = 'plenty';

	const CODE_LENGTH_SMALL = 'small';

	const CODE_LENGTH_MEDIUM = 'medium';

	const CODE_LENGTH_LARGE = 'large';

	const CAMPAIGN_TYPE_COUPON = 'coupon';

	const CAMPAIGN_TYPE_VOUCHER = 'voucher';

	const COUPON_TYPE_SALES = 'sales';

	const COUPON_TYPE_PROMOTION = 'promotion';

	const DISCOUNT_TYPE_FIXED = 'fixed';

	const DISCOUNT_TYPE_PERCENT = 'percent';

	const DISCOUNT_TYPE_ITEM = 'item';

	const DISCOUNT_TYPE_SHIPPING = 'shipping';

	const CAMPAIGN_CONCEPT_MULTI_CODE = 'multi_code';

	const CAMPAIGN_CONCEPT_SINGLE_CODE = 'single_code';

	const CAMPAIGN_REDEEM_TYPE_MULTI_PER_USER = 'multi_redeem_per_user';

	const CAMPAIGN_REDEEM_TYPE_SINGLE_PER_USER = 'single_redeem_per_user';

	const CAMPAIGN_REDEEM_TYPE_UNTIL_VALUE_REACHED = 'redeem_until_value_reached';

	const CAMPAIGN_REDEEM_TYPE_UNIQUE = 'unique_redeem';

	const CAMPAIGN_USAGE_SINGLE_AND_SUBSCRIPTION = 'single_and_subscription';

	const CAMPAIGN_USAGE_SINGLE = 'single_order';

	const CAMPAIGN_USAGE_SUBSCRIPTION = 'subscription';

	const CODE_ASSIGNMENT_GENERATE = 'generate';

	const CODE_ASSIGNMENT_USE_EXISTING = 'use_existing';

	const CAMPAIGN_VALID_FOR_ALL_CUSTOMERS = 'all_customers';

	const CAMPAIGN_VALID_FOR_NEW_CUSTOMERS = 'new_customers';

	const CAMPAIGN_VALID_FOR_EXISTING_CUSTOMERS = 'existing_customers';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$externalId;
	public		$name;
	public		$variable;
	public		$isPermittedForExternalReferrers;
	public		$includeShipping;
	public		$unusedCodesCount;
	public		$usedCodesCount;
	public		$endsAt;
	public		$startsAt;
	public		$minOrderValue;
	public		$codeDurationWeeks;
	public		$codeAssignment;
	public		$codeLength;
	public		$usage;
	public		$concept;
	public		$redeemType;
	public		$discountType;
	public		$itemDiscountToPay;
	public		$itemDiscountToBuy;
	public		$campaignType;
	public		$couponType;
	public		$description;
	public		$value;
	public		$codes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}