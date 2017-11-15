<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Code\Order\Models;


/**
 * Model that holds gift card codes.
 */
abstract class GiftCardCode 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderItemId;
	public		$campaignId;
	public		$code;
	public		$sender;
	public		$receiver;
	public		$message;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}