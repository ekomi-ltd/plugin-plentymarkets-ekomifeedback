<?php
namespace Plenty\Modules\Payment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\Flysystem\Exception;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Payment\Models\Payment;
use Plenty\Modules\Payment\Models\PaymentContactRelation;

/**
 * The PaymentContactRelationRepositoryContract is the interface for the payment contact relation repository. Create and delete relations between payments and contact.
 */
interface PaymentContactRelationRepositoryContract 
{

	/**
	 * Creates a payment contact relation.
	 */
	public function createContactRelation(
		Payment $payment, 
		Contact $contact
	):PaymentContactRelation;

	/**
	 * Deletes a payment contact relation.
	 */
	public function deleteContactRelation(
		Payment $payment
	);

}