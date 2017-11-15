<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment order relation model
 */
abstract class PaymentOrderRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$paymentId;
	public		$orderId;
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