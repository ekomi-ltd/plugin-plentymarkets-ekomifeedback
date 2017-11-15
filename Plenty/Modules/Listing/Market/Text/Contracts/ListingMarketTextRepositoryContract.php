<?php
namespace Plenty\Modules\Listing\Market\Text\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Listing\Market\Text\Models\ListingMarketText;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the listing market text repository.
 */
interface ListingMarketTextRepositoryContract 
{

	/**
	 * Get a listing market text
	 */
	public function get(
		int $id
	):ListingMarketText;

	/**
	 * Create new listing market text
	 */
	public function create(
		int $listingMarketId, 
		array $data
	):ListingMarketText;

	/**
	 * Update listing market text
	 */
	public function update(
		int $listingMarketId, 
		string $lang, 
		array $data
	):ListingMarketText;

	/**
	 * Update or create listing market text
	 */
	public function updateOrCreate(
		int $listingMarketId, 
		string $lang, 
		array $data
	):ListingMarketText;

	/**
	 * Delete listing market text
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * List listing market text
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
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