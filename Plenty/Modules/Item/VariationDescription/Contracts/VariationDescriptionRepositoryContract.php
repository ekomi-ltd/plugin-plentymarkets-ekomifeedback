<?php
namespace Plenty\Modules\Item\VariationDescription\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationDescription\Models\VariationDescription;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation description repository
 */
interface VariationDescriptionRepositoryContract 
{

	/**
	 * Creates texts
	 */
	public function create(
		array $data
	):VariationDescription;

	/**
	 * Updates texts
	 */
	public function update(
		array $data, 
		int $variationId, 
		string $lang
	):VariationDescription;

	/**
	 * Deletes texts
	 */
	public function delete(
		int $variationId, 
		string $lang
	):DeleteResponse;

	/**
	 * Gets texts
	 */
	public function find(
		int $variationId, 
		string $lang
	):VariationDescription;

	/**
	 * Get texts
	 */
	public function findById(
		int $id
	):VariationDescription;

	/**
	 * List texts
	 */
	public function findByVariationId(
		int $variationId
	):array;

}