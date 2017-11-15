<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceAccount;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price referrer account repository
 */
interface SalesPriceAccountRepositoryContract 
{

	/**
	 * Activates a referrer account for a sales price. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceAccount;

	/**
	 * Deactivates a referrer account for a sales price. The ID of the sales price, the type and the ID of the referrer account must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $accountType, 
		int $accountId
	):DeleteResponse;

	/**
	 * Gets a referrer account for a sales price. The ID of the sales price, the type and the ID of the referrer account must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $accountType, 
		int $accountId
	):SalesPriceAccount;

	/**
	 * Lists the activated referrer accounts of a sales price. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deactivates the referrer accounts for a sales price. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}