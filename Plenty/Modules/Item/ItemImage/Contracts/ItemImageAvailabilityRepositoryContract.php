<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Modules\Item\ItemImage\Models\ItemImageAvailability;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item image availability repository
 */
interface ItemImageAvailabilityRepositoryContract 
{

	/**
	 * Creates an image availability
	 */
	public function create(
		array $data
	):ItemImageAvailability;

	/**
	 * Deletes an image availability.
	 */
	public function delete(
		array $data
	):DeleteResponse;

	/**
	 * Lists image availabilities. The ID of the image must be specified.
	 */
	public function findByImageId(
		int $imageId
	):ItemImageAvailability;

	/**
	 * Lists image availabilities. The ID of the image and the type must be specified.
	 */
	public function findByType(
		int $imageId, 
		string $type
	):ItemImageAvailability;

}