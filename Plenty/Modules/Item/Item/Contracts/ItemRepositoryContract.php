<?php
namespace Plenty\Modules\Item\Item\Contracts;

use Illuminate\Http\Request;
use Plenty\Modules\Item\Item\Models\Item;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the attribute value repository
 */
interface ItemRepositoryContract 
{

	/**
	 * Creates an item.
	 */
	public function add(
		array $data
	);

	/**
	 * Get an item. The ID of the item must be specified.
	 */
	public function show(
		int $itemId, 
		array $columns = [], 
		string $lang = "de", 
		array $with = []
	);

	public function search(
		 $columns = [], 
		 $lang = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	);

	/**
	 * Update a item. The ID of the item must be specified.
	 */
	public function update(
		array $data, 
		int $itemId
	):Item;

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