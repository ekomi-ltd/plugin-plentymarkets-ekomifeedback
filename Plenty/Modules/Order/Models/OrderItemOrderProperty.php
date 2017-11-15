<?php
namespace Plenty\Modules\Order\Models;


/**
 * This model contains the order properties that are assigned to order items.
 */
abstract class OrderItemOrderProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyId;
	public		$value;
	public		$fileUrl;
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