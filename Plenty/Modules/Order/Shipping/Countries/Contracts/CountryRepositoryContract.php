<?php
namespace Plenty\Modules\Order\Shipping\Countries\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * Repository for Country
 */
interface CountryRepositoryContract 
{

	public function findIsoCode(
		int $countryId, 
		string $isoCodeType
	):string;

	public function getCountryById(
		int $countryId
	):Country;

	public function getCountriesList(
		int $active, 
		array $with
	):Collection;

	public function getActiveCountriesList(
	):Collection;

	public function getActiveCountryNameMap(
		string $language
	):array;

	public function getCountryByIso(
		string $isoCode, 
		string $isoType
	);

}