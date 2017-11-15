<?php
namespace Plenty\Modules\Order\Coupon\Code\Validation\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Coupon\Code\Validation\Models\CouponCodeValidation;

/**
 * CouponCodeValidatorContract is the interface for the coupon code validation repository. This interface provides the functionality to validate coupon data.
 */
interface CouponCodeValidatorContract 
{

	/**
	 * Validate a coupon code
	 */
	public function validate(
		CouponCodeValidation $validationData
	):CouponCodeValidation;

}