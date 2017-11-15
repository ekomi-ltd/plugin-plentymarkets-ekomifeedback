<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceCountry;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price country repository
 */
interface SalesPriceCountryRepositoryContract 
{

	/**
	 * Activates a country for a sales price. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceCountry;

	/**
	 * Deactivates a country for a sales price. The ID of the sales price and the ID of the country must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $countryId
	):DeleteResponse;

	/**
	 * Gets a country for a sales price. The ID of the sales price and the ID of the country must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $countryId
	):SalesPriceCountry;

	/**
	 * Lists the countries for a sales price. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes countries from a sales price. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}