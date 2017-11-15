<?php
namespace Plenty\Modules\Payment\Method\Contracts;


/**
 * The payment method container
 */
interface PaymentMethodContainer 
{

	public function register(
		string $paymentKey, 
		string $paymentMethodServiceClass, 
		array $rebuildEventClassesList
	);

}