<?php
namespace Plenty\Modules\Order\SerialNumber\Models;


/**
 * The order serial number model
 */
abstract class OrderSerialNumber 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$serialNumberId;
	public		$orderId;
	public		$orderItemId;
	public		$serialNumber;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}