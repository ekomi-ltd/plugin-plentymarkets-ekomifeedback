<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price name repository
 */
interface SalesPriceNameRepositoryContract 
{

	/**
	 * Creates a sales price name. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceName;

	/**
	 * Updates a sales price name. The ID of the sales price and the language code must be specified.
	 */
	public function update(
		array $data, 
		int $salesPriceId, 
		string $lang
	):SalesPriceName;

	/**
	 * Deletes a sales price name. The ID of the sales price and the language code must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		string $lang
	):DeleteResponse;

	/**
	 * Gets a sales price name. The ID of the sales price and the language code must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		string $lang
	):SalesPriceName;

	/**
	 * Lists all sales price names of a sales price. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

}