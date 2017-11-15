<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\Attribute;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute repository
 */
interface AttributeRepositoryContract 
{

	/**
	 * Creates new attribute
	 */
	public function create(
		array $data
	):Attribute;

	/**
	 * Gets an attribute. The ID of the attribute must be specified.
	 */
	public function show(
		int $id
	):Attribute;

	/**
	 * Updates an attribute. The ID of the attribute must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):Attribute;

	/**
	 * Deletes an attribute. The ID of the attribute must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Gets an attribute. The ID of the attribute must be specified.
	 */
	public function findById(
		int $id
	):Attribute;

	/**
	 * Gets an attribute. The backend name of the attribute must be specified.
	 */
	public function findByBackendName(
		string $backendName
	):Attribute;

	/**
	 * Lists all attributes.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

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