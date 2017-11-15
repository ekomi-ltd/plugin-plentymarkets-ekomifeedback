<?php
namespace Plenty\Modules\Item\VariationBundle\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationBundle\Models\VariationBundle;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation bundle repository
 */
interface VariationBundleRepositoryContract 
{

	/**
	 * Gets a variation bundle. The ID of the bundle must be specified.
	 */
	public function show(
		int $bundleId
	):VariationBundle;

	/**
	 * Creates a variation bundle.
	 */
	public function create(
		array $data
	):VariationBundle;

	/**
	 * Updates a variation bundle. The ID of the bundle must be specified.
	 */
	public function update(
		array $data, 
		int $bundleId
	):VariationBundle;

	/**
	 * Deletes a variation bundle component. The ID of the bundle must be specified.
	 */
	public function delete(
		int $bundleId
	):DeleteResponse;

	/**
	 * Lists variation bundles. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationBundle;

	/**
	 * Lists variation bundles. The ID of the component variation must be specified.
	 */
	public function findByComponentId(
		int $componentId
	):array;

}