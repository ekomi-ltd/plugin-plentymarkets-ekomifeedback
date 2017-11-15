<?php
namespace Plenty\Modules\Item\Manufacturer\Contracts;

use Plenty\Modules\Item\Manufacturer\Models\Manufacturer;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the manufacturer repository
 */
interface ManufacturerRepositoryContract 
{

	/**
	 * Creates a manufacturer.
	 */
	public function create(
		array $data
	):Manufacturer;

	/**
	 * Updates a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function update(
		array $data, 
		int $manufacturerId
	):Manufacturer;

	/**
	 * Deletes a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function delete(
		int $manufacturerId
	):DeleteResponse;

	/**
	 * Gets a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function findById(
		int $manufacturerId, 
		array $with = []
	):Manufacturer;

	/**
	 * Lists all manufacturers.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $with = []
	):PaginatedResult;

	/**
	 * Lists manufacturers by filter
	 */
	public function search(
		array $params = [], 
		array $columns = []
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