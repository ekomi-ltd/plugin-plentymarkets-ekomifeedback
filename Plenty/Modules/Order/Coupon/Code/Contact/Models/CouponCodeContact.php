<?php
namespace Plenty\Modules\Order\Coupon\Code\Contact\Models;


/**
 * The CouponCodeContact model.
 */
abstract class CouponCodeContact 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$code;
	public		$contactId;
	public		$openAmount;
	public		$redeemCount;
	public		$updatedAt;
	public		$campaignId;
	public		$externalTransactionId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}