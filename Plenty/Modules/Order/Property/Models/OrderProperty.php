<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The order properties model. Each order property has a type.
 */
abstract class OrderProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}