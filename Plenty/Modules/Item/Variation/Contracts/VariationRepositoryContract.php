<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Models\Variation;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation repository
 */
interface VariationRepositoryContract 
{

	/**
	 * Gets a variation. The ID of the variation must be specified.
	 */
	public function show(
		int $variationId, 
		array $with, 
		string $lang
	):Variation;

	/**
	 * Creates a variation.
	 */
	public function create(
		array $data
	):Variation;

	/**
	 * Creates a primary variation.
	 */
	public function createPrimary(
		array $data
	):Variation;

	/**
	 * Deletes a variation. The ID of the variation must be specified.
	 */
	public function delete(
		int $variationId
	):DeleteResponse;

	/**
	 * Get a variation. The ID of the variation must be specified.
	 */
	public function findById(
		int $variationId
	):Variation;

	/**
	 * Update a variation. The ID of the variation must be specified.
	 */
	public function update(
		array $data, 
		int $variationId
	):Variation;

}