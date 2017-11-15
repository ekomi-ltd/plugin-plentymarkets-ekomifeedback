<?php
namespace Plenty\Modules\Order\Coupon\Code\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;

/**
 * The CouponCodeRepositoryContract is the interface for the coupon code repository. This interface allows you to redeem coupons.
 */
interface CouponCodeRepositoryContract 
{

	/**
	 * Redeem coupon codes
	 */
	public function redeem(
		int $orderId, 
		string $coupon
	):bool;

}