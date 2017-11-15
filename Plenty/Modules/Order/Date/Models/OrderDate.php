<?php
namespace Plenty\Modules\Order\Date\Models;


/**
 * The OrderDate model.
 */
abstract class OrderDate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$date;
	public		$createdAt;
	public		$updatedAt;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}