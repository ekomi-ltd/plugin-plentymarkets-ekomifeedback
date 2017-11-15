<?php
namespace Plenty\Modules\Payment\MethodName\Models;


/**
 * The payment method name model
 */
abstract class PaymentMethodName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$paymentMethodId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}