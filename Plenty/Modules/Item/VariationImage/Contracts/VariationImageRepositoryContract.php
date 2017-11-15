<?php
namespace Plenty\Modules\Item\VariationImage\Contracts;

use Plenty\Modules\Item\VariationImage\Models\VariationImage;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation image repository
 */
interface VariationImageRepositoryContract 
{

	/**
	 * Creates link between image and variation
	 */
	public function create(
		array $data
	):VariationImage;

	/**
	 * Deletes Link between image and variation
	 */
	public function delete(
		int $variationId, 
		int $imageId
	):DeleteResponse;

	/**
	 * Lists variations linked to an image
	 */
	public function findByImageId(
		int $imageId
	):array;

	/**
	 * Lists images linked to a variation
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Lists all images linked to an item. The ID of the item must be specified.
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Gets an image link
	 */
	public function findById(
		int $id
	):VariationImage;

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