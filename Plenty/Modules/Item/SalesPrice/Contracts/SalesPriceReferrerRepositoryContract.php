<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceReferrer;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price referrer repository
 */
interface SalesPriceReferrerRepositoryContract 
{

	/**
	 * Activates a referrer for a sales price. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceReferrer;

	/**
	 * Deactivates a referrer for a sales price. The ID of the sales price and the ID of the referrer must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $referrerId
	):DeleteResponse;

	/**
	 * Gets a referrer. The ID of the sales price and the ID of the referrer must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $referrerId
	):SalesPriceReferrer;

	/**
	 * Lists all activated referrers of a sales. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deactivates all referrers for a sales price. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}