<?php
namespace Plenty\Modules\Item\VariationWarehouse\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationWarehouse\Models\VariationWarehouse;
use Plenty\Repositories\Models\DeleteResponse;
use\Contracts;

/**
 * The contract for the variation warehouse repository
 */
interface VariationWarehouseRepositoryContract 
{

	/**
	 * Gets the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.
	 */
	public function show(
		int $variationId, 
		int $warehouseId
	):VariationWarehouse;

	/**
	 * Creates a link between a warehouse and a variation and adds warehouse data.
	 */
	public function create(
		array $data
	):VariationWarehouse;

	/**
	 * Updates the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.
	 */
	public function update(
		array $data, 
		int $variationId, 
		int $warehouseId
	):VariationWarehouse;

	/**
	 * Deletes the link between a warehouse and a variation. The ID of the variation and the ID of the warehouse must be specified.
	 */
	public function delete(
		int $variationId, 
		int $warehouseId
	):DeleteResponse;

	/**
	 * Lists all warehouse data of a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Lists all warehouse data of a variation with inheritance details. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):array;

}