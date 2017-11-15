<?php
namespace Plenty\Modules\Category\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Category\Models\Category;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Repository for categories
 */
interface CategoryRepositoryContract 
{

	/**
	 * Returns one category by id.
	 */
	public function get(
		int $categoryId, 
		string $lang = "de"
	):Category;

	/**
	 * Returns all linklist categories as tree.
	 */
	public function getLinklistTree(
		string $type = "all", 
		string $lang = "de", 
		int $clientId = null, 
		int $maxLevel = 6
	):array;

	/**
	 * Rebuild the category tree cache
	 */
	public function buildCache(
		string $type = "all", 
		string $lang = "de", 
		int $clientId = 0
	);

	/**
	 * Returns all linklist categories as list.
	 */
	public function getLinklistList(
		string $type = "all", 
		string $lang = "de", 
		int $clientId = null, 
		int $maxLevel = 6
	):array;

	/**
	 * Returns true if category has children.
	 */
	public function hasChildren(
		int $categoryId, 
		bool $onlySiteMapped = false, 
		bool $onlyLinkListed = false
	):bool;

	/**
	 * Returns children of the category.
	 */
	public function getChildren(
		int $categoryId, 
		string $lang = "de"
	):array;

	/**
	 * Retrieves the url for a category.
	 */
	public function getUrl(
		int $categoryId, 
		string $lang = "de", 
		bool $onlySitemaps = false
	):string;

	/**
	 * Search for categories
	 */
	public function search(
		int $categoryId = null, 
		int $page = 0, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * Creates new categories, including CategoryDetails. At least one CategoryDetails object for the default language is required. The data fields 'plentyId','lang' and 'name' are required. Client objects can also be specified to activate visibility for a client.
	 */
	public function createCategories(
		array $data
	):array;

	/**
	 * Update categories, including optional CategoryDetails. The data fields 'plentyId','lang' are required for the CategoryDetails object. Client objects can also be specified to change visibility for a client.
	 */
	public function updateCategories(
		array $data
	):array;

	/**
	 * Creates a new category
	 */
	public function createCategory(
		array $data
	):Category;

	/**
	 * Deletes a category. The ID of the category must be specified.
	 */
	public function delete(
		int $categoryId
	):DeleteResponse;

	/**
	 * Delete the category details for the languages specified.
	 */
	public function deleteCategoryDetails(
		int $categoryId, 
		array $data
	):DeleteResponse;

	/**
	 * Deactivate availability for clients
	 */
	public function deleteCategoryClients(
		int $categoryId, 
		array $data
	):DeleteResponse;

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