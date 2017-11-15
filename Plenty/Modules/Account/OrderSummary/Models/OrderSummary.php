<?php
namespace Plenty\Modules\Account\OrderSummary\Models;


/**
 * The order summary model.
 */
abstract class OrderSummary 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$addressId;
	public		$contactId;
	public		$unpaidOrdersCount;
	public		$unpaidOrderTotalAmount;
	public		$orderCount;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}