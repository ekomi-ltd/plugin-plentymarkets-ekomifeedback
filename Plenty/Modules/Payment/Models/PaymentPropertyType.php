<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment property type model
 */
abstract class PaymentPropertyType 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$erasable;
	public		$position;
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