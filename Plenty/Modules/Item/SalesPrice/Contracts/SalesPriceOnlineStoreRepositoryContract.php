<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceOnlineStore;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price online store repository
 */
interface SalesPriceOnlineStoreRepositoryContract 
{

	/**
	 * Activates a client (store) for a sales price. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceOnlineStore;

	/**
	 * Deactivates a client (store) for a sales price. The ID of the sales price and the ID of the client (store) must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $onlineStoreId
	):DeleteResponse;

	/**
	 * Deactivates all clients (stores) for a sales price. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

	/**
	 * Gets client (store) information for a sales price. The ID of the sales price and the ID of the client (store) must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $onlineStoreId
	):SalesPriceOnlineStore;

	/**
	 * Lists the active clients (stores) for a sales price. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

}