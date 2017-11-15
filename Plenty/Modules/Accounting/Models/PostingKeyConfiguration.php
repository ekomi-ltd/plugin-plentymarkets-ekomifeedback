<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The posting key configuration model. A posting key configuration is a set of 4 posting keys. A posting key configuration is always associated with an accounting location and can have a posting key per VAT rate. A posting key defines how line items are booked to accounts.
 */
abstract class PostingKeyConfiguration 
{

	const CFG_NAME = 'cfgPostingKey_location_';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$locationId;
	public		$postingKeys;
	public		$location;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}