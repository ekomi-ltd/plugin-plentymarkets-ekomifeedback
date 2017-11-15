<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment contact relation model
 */
abstract class PaymentContactRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$paymentId;
	public		$contactId;
	public		$assignedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}