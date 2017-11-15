<?php
namespace Plenty\Modules\Order\StatusHistory\Models;


/**
 * The status history entry model
 */
abstract class StatusHistoryEntry 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$statusId;
	public		$createdAt;
	public		$userId;
	public		$procedureText;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}