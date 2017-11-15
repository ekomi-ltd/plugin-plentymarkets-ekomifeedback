<?php
namespace Plenty\Modules\Item\VariationDefaultCategory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationDefaultCategory\Models\VariationDefaultCategory;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation default category repository
 */
interface VariationDefaultCategoryRepositoryContract 
{

	/**
	 * Gets the default category of a variation for the client (store) specified. The ID of the variation and the plenty ID of the client (store) must be specified.
	 */
	public function show(
		int $plentyId, 
		int $variationId
	):VariationDefaultCategory;

	/**
	 * Creates a link between a variation and a category that designates the category as the default category for this client (store).
	 */
	public function create(
		array $data
	):VariationDefaultCategory;

	/**
	 * Updates the default category linked to a variation. The ID of the variation and the plenty ID of the client (store) must be specified.
	 */
	public function update(
		array $data, 
		int $plentyId, 
		int $variationId
	):VariationDefaultCategory;

	/**
	 * Deletes the link between a variation and a default category. The ID of the variation and the plenty ID of the client (store) must be specified.
	 */
	public function delete(
		int $plentyId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists the default categories of a variation for all clients (stores). The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationDefaultCategory;

}