<?php
namespace Plenty\Modules\Order\Payment\Method\Models;


/**
 * The payment method model
 */
abstract class PaymentMethod 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$minimumGross;
	public		$priority;
	public		$active;
	public		$showBankDetails;
	public		$infoPageType;
	public		$infoPageExternalUrl;
	public		$feeDomesticFlatRateWebstore;
	public		$feeDomesticFlatRateInternal;
	public		$feeDomesticPercentageWebstore;
	public		$feeDomesticPercentageInternal;
	public		$feeForeignFlatRateWebstore;
	public		$feeForeignFlatRateInternal;
	public		$feeForeignPercentageWebstore;
	public		$feeForeignPercentageInternal;
	public		$informations;
	public		$webstores;
	public		$coutries;
	public		$information;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}