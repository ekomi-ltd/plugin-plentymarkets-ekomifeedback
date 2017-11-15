<?php
namespace Plenty\Modules\Payment\Events\Checkout;

use Plenty\Modules\Order\Models\Order;

/**
 * The event is triggered when a payment is executed.
 */
abstract class ExecutePayment 
{

	/**
	 * Updates the ID of the order in the checkout. The ID must be specified.
	 */
	abstract public function setOrderId(
		int $orderId
	):self;

	/**
	 * Gets the ID of the order.
	 */
	abstract public function getOrderId(
	):int;

	/**
	 * Updates the ID of the payment method. The ID must be specified.
	 */
	abstract public function setMop(
		int $mop
	):self;

	/**
	 * Gets the ID of the payment method.
	 */
	abstract public function getMop(
	):int;

	/**
	 * Updates the content type.
	 */
	abstract public function setType(
		string $type
	):self;

	/**
	 * Gets the content type.
	 */
	abstract public function getType(
	):string;

	/**
	 * Updates the value of the content type.
	 */
	abstract public function setValue(
		string $value
	):self;

	/**
	 * Gets the value of the content type.
	 */
	abstract public function getValue(
	):string;

}