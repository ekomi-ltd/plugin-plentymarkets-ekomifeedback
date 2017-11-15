<?php
namespace Plenty\Modules\Order\Shipping\Contracts;


/**
 * The EUCountryCodesServiceContract
 */
interface EUCountryCodesServiceContract 
{

	public function isEUCountry(
		int $countryId
	):bool;

	public function hasCommunityTax(
		int $countryId
	):bool;

	public function getTaxTerritory(
		int $countryId
	):int;

	public function hasCommunityToll(
		int $countryId
	):bool;

	public function getTollTerritory(
		int $countryId
	):int;

	public function isExportDelivery(
		int $countryId, 
		int $merchandCountryId = null
	):bool;

}