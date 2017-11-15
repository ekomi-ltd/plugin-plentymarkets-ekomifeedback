<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address model
 */
abstract class Address 
{

	const PACKSTATION = 'PACKSTATION';

	const POSTFILIALE = 'POSTFILIALE';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name1;
	public		$name2;
	public		$name3;
	public		$name4;
	public		$companyName;
	public		$firstName;
	public		$lastName;
	public		$careOf;
	public		$address1;
	public		$address2;
	public		$address3;
	public		$address4;
	public		$street;
	public		$houseNumber;
	public		$additional;
	public		$postalCode;
	public		$town;
	public		$countryId;
	public		$stateId;
	public		$readOnly;
	public		$sessionId;
	public		$checkedAt;
	public		$createdAt;
	public		$updatedAt;
	public		$taxIdNumber;
	public		$externalId;
	public		$entryCertificate;
	public		$phone;
	public		$email;
	public		$postident;
	public		$fsk;
	public		$birthday;
	public		$personalNumber;
	public		$packstationNo;
	public		$isPackstation;
	public		$isPostfiliale;
	public		$options;
	public		$contacts;
	public		$orders;
	public		$country;
	public		$state;
	public		$contactRelations;
	public		$orderRelations;
	public		$warehouseRelations;
	public		$reorderRelations;
	public		$schedulerRelations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}