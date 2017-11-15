<?php
namespace Plenty\Modules\Basket\Events\Basket;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Order\Contracts\PriceCalculatorContract;
use Plenty\Modules\Order\Coupon\Code\Validation\Models\CouponCodeValidation;
use Plenty\Modules\Order\Models\PriceCalculationResult;

/**
 * The event is triggered after the shopping cart is changed.
 */
abstract class AfterBasketChanged 
{

	abstract public function hasValidCoupon(
	):bool;

	abstract public function setHasValidCoupon(
		bool $hasValidCoupon
	);

	abstract public function getBasket(
	):Basket;

	abstract public function getLocationId(
	):int;

	abstract public function setLocationId(
		int $locationId
	):self;

	abstract public function getInvoiceAddress(
	):Address;

	abstract public function setInvoiceAddress(
		Address $invoiceAddress
	):self;

	abstract public function getMaxFsk(
	):int;

	abstract public function setMaxFsk(
		int $maxFsk
	):self;

	abstract public function getShippingCosts(
	):float;

	abstract public function setShippingCosts(
		float $shippingCosts
	):self;

}