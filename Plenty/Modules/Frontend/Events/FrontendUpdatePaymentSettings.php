<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the payment method is changed in the online store.
 */
abstract class FrontendUpdatePaymentSettings 
{

	/**
	 * Gets the ID of the payment method.
	 */
	abstract public function getPaymentMethodId(
	):int;

}