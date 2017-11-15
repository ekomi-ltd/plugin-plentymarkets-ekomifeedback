<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceCurrency;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price currency repository
 */
interface SalesPriceCurrencyRepositoryContract 
{

	/**
	 * Activates a currency for a sales price. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceCurrency;

	/**
	 * Deactivates a currency for a sales price. The ID of the sales price and the ISO code of the currency must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		string $currency
	):DeleteResponse;

	/**
	 * Gets a sales price currency. The ID of the sales price and the ISO code of the currency must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		string $currency
	):SalesPriceCurrency;

	/**
	 * Lists the active currencies of a sales price. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deactivates the currencies of a sales price. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}