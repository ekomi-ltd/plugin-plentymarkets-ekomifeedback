<?php
namespace Plenty\Modules\Order\Scheduler\Models;


/**
 * The legacy order model
 */
abstract class OrderScheduler 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$methodOfPayment;
	public		$start;
	public		$last;
	public		$end;
	public		$deliveryAddress;
	public		$billingAddress;
	public		$addresses;
	public		$addressRelations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}