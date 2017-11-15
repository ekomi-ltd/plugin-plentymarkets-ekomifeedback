<?php
namespace Plenty\Modules\Order\Payment\Method\Contracts;

use Plenty\Modules\Order\Payment\Method\Models\PaymentMethod;

/**
 * Repository Contract for PaymentMethod
 */
interface PaymentMethodRepositoryContract 
{

	public function getPaymentMethods(
		int $countryId, 
		int $plentyId = null, 
		string $lang = "de"
	):array;

}