<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\Shelf;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Management\Contracts;

/**
 * The ShelfManagementRepositoryContract is the interface for the shelf management repository. This interface provides the functionality to manage the warehouse configuration for shelves. Shelves can be retrieved, created or updated here.
 */
interface ShelfManagementRepositoryContract 
{

	/**
	 * Find a shelf by id.
	 */
	public function getShelfById(
		int $shelfId, 
		array $columns = [], 
		array $with = []
	):Shelf;

	/**
	 * Find shelves. The results can be filtered by warehouse id and rack id.
	 */
	public function findShelves(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Create a new shelf.
	 */
	public function createShelf(
		array $data, 
		int $warehouseId, 
		int $rackId
	):Shelf;

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