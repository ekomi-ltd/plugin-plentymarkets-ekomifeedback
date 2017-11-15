<?php
namespace Plenty\Modules\Accounting\Contracts;

use Plenty\Modules\Accounting\Exceptions\AccountingException;
use Plenty\Modules\Accounting\Models\AccountingLocation;

/**
 * Provides methods to detect a location ID.
 */
interface AccountingServiceContract 
{

	/**
	 * Get a location ID for a country of delivery. The plenty ID must be specified and the ID of the country of delivery can be specified. If the ID of a country is not specified, the ID of the standard location of the specified client will be returned.
	 */
	public function detectLocationId(
		int $plentyId, 
		int $countryId = null
	):int;

	/**
	 * Get the location ID for a country of delivery. The ID of the client and the ID of the country of delivery can be specified. If neither the client ID nor the ID of a country are specified, the ID of the standard location of the default client will be returned.
	 */
	public function detectLocationIdByClientId(
		int $clientId = null, 
		int $countryId = null
	):int;

	/**
	 * List accounting locations. The plenty ID must be specified and the ID of a country of delivery can be specified. If the ID of the country is specified, only one accounting location will be returned. If the ID of the country is not specified, all accounting locations of the client will be returned.
	 */
	public function getAccountingLocations(
		int $plentyId, 
		int $countryId = null
	):array;

	/**
	 * List accounting locations. The ID of the client and the ID of the country of delivery can be specified. If neither the client ID nor the ID of a country are specified, all accounting locations of the default client will be returned.
	 */
	public function getAccountingLocationsByClient(
		int $clientId = null, 
		int $countryId = null
	):array;

}