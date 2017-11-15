<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order type model.
 */
abstract class OrderType 
{

	const TYPE_SALES_ORDER = 1;

	const TYPE_DELIVERY_ORDER = 2;

	const TYPE_RETURN = 3;

	const TYPE_CREDIT_NOTE = 4;

	const TYPE_WARRANTY = 5;

	const TYPE_REPAIR = 6;

	const TYPE_OFFER = 7;

	const TYPE_ADVANCE_ORDER = 8;

	const TYPE_MULTI_ORDER = 9;

	const TYPE_MULTI_CREDIT_NOTE = 10;

	const TYPE_MULTI_DELIVERY = 11;

	const TYPE_REORDER = 12;

	const TYPE_PARTIAL_DELIVERY = 13;

	const TYPE_SUBSCRIPTION = 14;

	const TYPE_REDISTRIBUTION = 15;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}