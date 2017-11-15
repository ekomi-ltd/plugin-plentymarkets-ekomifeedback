<?php
namespace Plenty\Modules\Order\Models\Legacy;


/**
 * The legacy order model
 */
abstract class Order 
{

	const UPDATED_AT = 'last_update';

	const CREATED_AT = 'order_main_entry_timestamp';
	public		$id;
	public		$orderType;
	public		$contactId;
	public		$referrerId;
	public		$status;
	public		$userId;
	public		$entryDate;
	public		$webstoreId;
	public		$warehouseId;
	public		$sellerAccount;
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