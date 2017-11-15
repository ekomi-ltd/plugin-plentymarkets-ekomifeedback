<?php
namespace Plenty\Modules\StockManagement\Stock\Contracts;

use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The StockStorageLocationRepositoryContract is the interface for the stock storage location repository. This interface allows you to list the stock of all storage locations of a warehouse or to list all storage locations of a variation and the stock stored at these locations.
 */
interface StockStorageLocationRepositoryContract 
{

	/**
	 * List stock of all storage locations of a warehouse
	 */
	public function listStockStorageLocationsByWarehouseId(
		int $warehouseId, 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List stock of a variation per storage location
	 */
	public function listStockStorageLocationsByVariationId(
		int $variationId, 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
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