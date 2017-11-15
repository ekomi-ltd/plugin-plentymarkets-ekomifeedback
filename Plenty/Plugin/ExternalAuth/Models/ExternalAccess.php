<?php
namespace Plenty\Plugin\ExternalAuth\Models;


/**
 * Information on a contact's external access tokens
 */
abstract class ExternalAccess 
{

	const UPDATED_AT = 'plenty_customer_external_access_last_update';

	const CREATED_AT = 'createdAt';
	public		$contactId;
	public		$accessType;
	public		$externalContactId;
	public		$accessToken;
	public		$lastUpdate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}