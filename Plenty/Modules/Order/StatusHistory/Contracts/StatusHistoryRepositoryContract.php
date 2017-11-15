<?php
namespace Plenty\Modules\Order\StatusHistory\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface allows you to get the status history of an order and to list the status histories of all orders.
 */
interface StatusHistoryRepositoryContract 
{

	/**
	 * Get the status history of an order
	 */
	public function getStatusHistoryByOrderId(
		int $orderId, 
		array $columns = []
	):Collection;

	/**
	 * List status histories
	 */
	public function getStatusHistory(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}