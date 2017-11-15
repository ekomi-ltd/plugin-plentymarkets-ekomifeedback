<?php
namespace Plenty\Modules\Listing\LayoutTemplate\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Listing\LayoutTemplate\Models\LayoutTemplate;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The LayoutTemplateRepositoryContract is the interface for the layout template repository. This interface allows you to get a single layout template or lists of layout templates as well as to create, update or delete a layout tempalte.
 */
interface LayoutTemplateRepositoryContract 
{

	/**
	 * Get a layout template.
	 */
	public function get(
		int $id, 
		array $with = []
	):LayoutTemplate;

	/**
	 * Create a layout template.
	 */
	public function create(
		array $data
	):LayoutTemplate;

	/**
	 * Delete layout template
	 */
	public function delete(
		int $id
	):bool;

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