<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The model of the allowed payment method for the contact
 */
abstract class ContactAllowedMethodOfPayment 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$methodOfPaymentId;
	public		$allowed;
	public		$createdAt;
	public		$updatedAt;
	public		$isPaymentActive;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}