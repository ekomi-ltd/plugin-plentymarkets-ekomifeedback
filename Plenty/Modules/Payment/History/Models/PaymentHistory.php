<?php
namespace Plenty\Modules\Payment\History\Models;


/**
 * The payment history model
 */
abstract class PaymentHistory 
{

	const HISTORY_TYPE_CREATED = 1;

	const HISTORY_TYPE_STATUS_UPDATED = 2;

	const HISTORY_TYPE_ASSIGNED = 3;

	const HISTORY_TYPE_DETACHED = 4;

	const HISTORY_TYPE_DELETED = 5;

	const HISTORY_TYPE_UPDATED = 6;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$paymentId;
	public		$typeId;
	public		$value;
	public		$user;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}