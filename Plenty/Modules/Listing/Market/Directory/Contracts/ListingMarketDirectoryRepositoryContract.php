<?php
namespace Plenty\Modules\Listing\Market\Directory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Listing\Market\Directory\Models\ListingMarketDirectory;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the listing market directory repository.
 */
interface ListingMarketDirectoryRepositoryContract 
{

	/**
	 * Get a listing market directory
	 */
	public function get(
		int $id, 
		array $with = []
	):ListingMarketDirectory;

	/**
	 * List all directories
	 */
	public function all(
		array $with = [], 
		array $filters = []
	):array;

	/**
	 * Create a listing market directory.
	 */
	public function create(
		array $data
	):array;

	/**
	 * Update listing market directory
	 */
	public function update(
		int $id, 
		array $data
	):ListingMarketDirectory;

	/**
	 * Delete a listing market directory
	 */
	public function delete(
		int $id
	);

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