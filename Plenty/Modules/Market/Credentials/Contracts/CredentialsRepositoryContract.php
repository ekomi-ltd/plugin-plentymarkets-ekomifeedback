<?php
namespace Plenty\Modules\Market\Credentials\Contracts;

use Plenty\Modules\Market\Credentials\Models\Credentials;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the fitment repository.
 */
interface CredentialsRepositoryContract 
{

	/**
	 * Get credentials
	 */
	public function get(
		int $id
	):Credentials;

	/**
	 * Create credentials
	 */
	public function create(
		array $data
	):Credentials;

	/**
	 * Update credentials
	 */
	public function update(
		int $id, 
		array $data
	):Credentials;

	/**
	 * Delete credentials
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * List all credentials
	 */
	public function all(
		array $filters = []
	):array;

	/**
	 * List credentials
	 */
	public function search(
		array $filters = [], 
		int $page = 0, 
		int $itemsPerPage = \Plenty\Modules\Market\Credentials\Models\Credentials::MAX_ITEMS_PER_PAGE
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