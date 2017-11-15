<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order amount vat model.
 */
abstract class OrderAmountVat 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderAmountId;
	public		$countryVatId;
	public		$vatField;
	public		$vatRate;
	public		$value;
	public		$netTotal;
	public		$grossTotal;
	public		$createdAt;
	public		$updatedAt;
	public		$orderAmount;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}