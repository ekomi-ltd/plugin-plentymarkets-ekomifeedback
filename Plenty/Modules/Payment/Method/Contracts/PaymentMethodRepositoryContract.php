<?php
namespace Plenty\Modules\Payment\Method\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Payment\Method\Models\PaymentMethod;

/**
 * The PaymentMethodRepositoryContract is the interface for the payment method repository. List, get, create and update payment methods.
 */
interface PaymentMethodRepositoryContract 
{

	/**
	 * Lists payment methods.
	 */
	public function all(
	):array;

	/**
	 * Lists payment methods for a plugin key. The plugin key must be specified.
	 */
	public function allForPlugin(
		string $pluginKey
	):array;

	public function allPluginPaymentMethods(
	):array;

	public function allOldPaymentMethods(
	):array;

	/**
	 * Gets a payment method. The ID of the payment method must be specified.
	 */
	public function findByPaymentMethodId(
		int $paymentMethodId
	):PaymentMethod;

	/**
	 * Creates a payment method.
	 */
	public function createPaymentMethod(
		 $paymentMethodData
	):PaymentMethod;

	/**
	 * Updates the payment method name.
	 */
	public function updateName(
		 $paymentMethodData
	):PaymentMethod;

	/**
	 * Prepares a payment method. The ID of the payment method must be specified.
	 */
	public function preparePaymentMethod(
		int $mop
	):array;

	/**
	 * Executes a payment. The ID of the payment method and the ID of the order must be specified.
	 */
	public function executePayment(
		int $mop, 
		int $orderId
	):array;

}