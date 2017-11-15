<?php
namespace Plenty\Modules\Order\Payment\Method\Models;


/**
 * The payment method information model
 */
abstract class PaymentMethodInformation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$lang;
	public		$name;
	public		$infoPageType;
	public		$infoPageInternalContent;
	public		$infoPageExternalUrl;
	public		$logo;
	public		$showLogo;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}