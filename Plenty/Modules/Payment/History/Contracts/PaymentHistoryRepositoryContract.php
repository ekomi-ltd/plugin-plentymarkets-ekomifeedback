<?php
namespace Plenty\Modules\Payment\History\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Payment\History\Models\PaymentHistory;

/**
 * The PaymentHistoryRepositoryContract is the interface for the payment history repository. Get and create the payment history.
 */
interface PaymentHistoryRepositoryContract 
{

	/**
	 * Gets the payment history for a payment. The ID of the payment and the ID of the payment type must be specified.
	 */
	public function getByPaymentId(
		int $paymentId, 
		int $typeId = 0
	):array;

	/**
	 * Creates the payment history.
	 */
	public function createHistory(
		 $data
	):PaymentHistory;

}