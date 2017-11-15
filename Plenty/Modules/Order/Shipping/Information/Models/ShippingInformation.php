<?php
namespace Plenty\Modules\Order\Shipping\Information\Models;


/**
 * ShippingInformationModel
 */
abstract class ShippingInformation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$orderId;
	public		$shippingServiceProvider;
	public		$transactionId;
	public		$shippingStatus;
	public		$shippingCosts;
	public		$additionalData;
	public		$registrationAt;
	public		$shipmentAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}