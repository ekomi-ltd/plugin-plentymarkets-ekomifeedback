<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The contact bank model.
 */
abstract class ContactBank 
{

	const CUSTOMER = 'customer';

	const BACKEND = 'backend';

	const IMPORT = 'import';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$orderId;
	public		$accountOwner;
	public		$bankName;
	public		$bankAddress;
	public		$bankPostalCodeTown;
	public		$bankCountry;
	public		$iban;
	public		$bic;
	public		$accountNumber;
	public		$sortCode;
	public		$lastUpdateBy;
	public		$directDebitMandateAvailable;
	public		$directDebitMandateAt;
	public		$directDebitMethod;
	public		$directDebitType;
	public		$paymentMethod;
	public		$createdAt;
	public		$updatedAt;
	public		$contact;
	public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}