<?php
namespace Plenty\Modules\Order\Coupon\Code\Order\Models;


/**
 * The CouponCodeOrder model.
 */
abstract class CouponCodeOrder 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$corderItemId;
	public		$campaignId;
	public		$code;
	public		$type;
	public		$amount;
	public		$vatRate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}