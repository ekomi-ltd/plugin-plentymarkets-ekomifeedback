<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Modules\Item\ItemImage\Models\ItemImage;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item image repository
 */
interface ItemImageRepositoryContract 
{

	/**
	 * Updates an image. The ID of the image must be specified.
	 */
	public function update(
		array $data, 
		int $imageId
	):ItemImage;

	/**
	 * Deletes an image. The ID of the item must be specified.
	 */
	public function delete(
		int $imageId
	):DeleteResponse;

	/**
	 * Shows an image. The ID of the item must be specified.
	 */
	public function show(
		int $imageId
	):ItemImage;

	/**
	 * Lists images. The ID of the item must be specified.
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Lists images. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Shows an image. The ID of the item and hash must be specified.
	 */
	public function findByItemIdAndOriginalChecksum(
		int $itemId, 
		string $checksum
	):ItemImage;

	/**
	 * Uploads an item image
	 */
	public function upload(
		array $data
	):ItemImage;

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