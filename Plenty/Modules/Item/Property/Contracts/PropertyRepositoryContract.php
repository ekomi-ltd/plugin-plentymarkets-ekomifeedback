<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\Property;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the property repository
 */
interface PropertyRepositoryContract 
{

	/**
	 * Creates a property.
	 */
	public function create(
		array $data
	):Property;

	/**
	 * Gets a property. The ID of the property must be specified.
	 */
	public function show(
		int $id
	):Property;

	/**
	 * Updates a property. The ID of the property must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):Property;

	/**
	 * Deletes a property. The ID of the property must be specified.
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Gets a property. The ID of the property must be specified.
	 */
	public function findById(
		int $id
	):Property;

	/**
	 * Lists all properties.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

	/**
	 * Search properties.
	 */
	public function search(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $with = [], 
		array $filter = []
	):PaginatedResult;

	/**
	 * Gets an property. The backend name of the property must be specified.
	 */
	public function findByBackendName(
		string $backendName
	):Property;

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