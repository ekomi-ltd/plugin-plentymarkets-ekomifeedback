<?php
namespace Plenty\Modules\Accounting\Contracts;


/**
 * This interface provides methods to initialise the country of a location or the country of an order as well as methods to get the ID of a client, the plenty ID of a client, the country or the ID of country.
 */
interface DetermineShopCountryContract 
{

	/**
	 * Initialise the country of the standard location of a client. The ID of the client must be specified.
	 */
	public function initByClientId(
		int $clientId = 0
	);

	/**
	 * Initialise the country of the standard location of a client. The plenty ID of the client can be specified. If no plenty ID is specified, the standard client will be used.
	 */
	public function initByPlentyId(
		int $plentyId = 0
	);

	/**
	 * Initialise the country of a location. The ID of the location must be specified.
	 */
	public function initByLocationId(
		int $locationId
	);

	/**
	 * Initialise the country for an order. The ID of the order must be specified.
	 */
	public function initByOrderId(
		int $orderId
	);

	/**
	 * Get the ID of the country of the current standard location. One of the initialise methods must be called first. The client that was initialised with the initialise method is your current client.
	 */
	public function getCountryId(
	):int;

	/**
	 * Get the ID of the current client. One of the initialise methods must be called first. The client that was initialised with the initialise method is your current client.
	 */
	public function getClientId(
	):int;

	/**
	 * Get the plenty ID of the current client. One of the initialise methods must be called first. The client that was initialised with the initialise method is your current client.
	 */
	public function getPlentyId(
	):int;

	/**
	 * Get the ID of the country of a client's standard location. The ID of the client must be specified.
	 */
	public function getCountryIdByClientId(
		int $clientId = 0
	):int;

	/**
	 * Get the ID of the country of a client's standard location. The plenty ID of the client must be specified.
	 */
	public function getCountryIdByPlentyId(
		int $plentyId
	):int;

	/**
	 * Get the country of a client's standard location. The ID of the client and the ID of the country must be specified.
	 */
	public function getCountryIdByClientIdAndCountryId(
		int $clientId, 
		int $countryId
	):int;

	/**
	 * Get the country of a location. The ID of the location must be specified.
	 */
	public function getCountryIdByLocationId(
		int $locationId
	):int;

}