<?php
namespace Plenty\Modules\Item\ItemImage\Contracts;

use Plenty\Modules\Item\ItemImage\Models\ItemImageName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item image name repository
 */
interface ItemImageNameRepositoryContract 
{

	/**
	 * Creates an image name
	 */
	public function create(
		array $data
	):ItemImageName;

	/**
	 * Updates an image name. The ID of the image and the language must be specified.
	 */
	public function update(
		array $data, 
		int $imageId, 
		string $lang
	):ItemImageName;

	/**
	 * Deletes an image name. The ID of the image and the language must be specified.
	 */
	public function delete(
		int $imageId, 
		string $lang
	):DeleteResponse;

	/**
	 * Gets an image name. The ID of the image and the language must be specified.
	 */
	public function findOne(
		int $imageId, 
		string $lang
	):ItemImageName;

	/**
	 * Lists all image names. The ID of the image must be specified.
	 */
	public function findByImageId(
		int $imageId
	):array;

}