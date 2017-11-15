<?php
namespace Plenty\Modules\Item\VariationCategory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationCategory\Models\VariationCategory;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation category repository
 */
interface VariationCategoryRepositoryContract 
{

	/**
	 * Gets the link between a category and a variation. The ID of the variation and the ID of the category must be specified.
	 */
	public function show(
		int $categoryId, 
		int $variationId
	):VariationCategory;

	/**
	 * Creates a link between a category and a variation.
	 */
	public function create(
		array $data
	):VariationCategory;

	/**
	 * Updates a link between a category and a variation. The ID of the variation and the ID of the category must be specified.
	 */
	public function update(
		array $data, 
		int $categoryId, 
		int $variationId
	):VariationCategory;

	/**
	 * Deletes the link between a category and a variation. The ID of the variation and the ID of the category must be specified.
	 */
	public function delete(
		int $categoryId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists the categories linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationCategory;

	/**
	 * Lists the categories linked to a variation including inheritance information. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationCategory;

}