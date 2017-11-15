<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Code\Models;


/**
 * The CouponCampaignCode model contains information about coupon codes. Each code belongs to one campaign only.
 */
abstract class CouponCampaignCode 
{

	const MIN_CODE_LENGTH = 6;

	const MAX_CODE_LENGTH = 24;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$code;
	public		$campaignId;
	public		$disable;
	public		$consumed;
	public		$usedCount;
	public		$usedAmount;
	public		$generatedAt;
	public		$lastUsedAt;
	public		$consumedAt;
	public		$expiresAt;
	public		$campaign;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}