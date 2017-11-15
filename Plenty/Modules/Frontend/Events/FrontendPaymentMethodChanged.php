<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the payment method is changed in the online store.
 */
abstract class FrontendPaymentMethodChanged 
{

	/**
	 * Gets the ID of the payment method.
	 */
	abstract public function getPaymentMethodId(
	);

	/**
	 * Updates the ID of the payment method. The ID must be specified.
	 */
	abstract public function setPaymentMethodId(
		 $paymentMethodId
	);

}