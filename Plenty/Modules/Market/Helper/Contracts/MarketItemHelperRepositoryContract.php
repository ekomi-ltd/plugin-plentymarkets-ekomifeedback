<?php
namespace Plenty\Modules\Market\Helper\Contracts;


/**
 * The contract for the item helper repository.
 */
interface MarketItemHelperRepositoryContract 
{

	/**
	 * Get the external manufacturer name.
	 */
	public function getExternalManufacturerName(
		int $manufacturerId
	):string;

	/**
	 * Generates or updates the sku
	 */
	public function generateSku(
		int $variationId, 
		float $marketId, 
		int $accountId, 
		bool $setLastExportedTimestamp
	):string;

	/**
	 * Returns the availability name or the availability average days
	 */
	public function getAvailability(
		int $availabilityId, 
		string $lang, 
		bool $returnAvailabilityName
	):string;

}