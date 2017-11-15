<?php
namespace Plenty\Modules\Item\VariationSupplier\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationSupplier\Models\VariationSupplier;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation supplier repository
 */
interface VariationSupplierRepositoryContract 
{

	/**
	 * Gets the data of a supplier linked to a variation. The variation supplier ID must be specified.
	 */
	public function show(
		int $id
	):VariationSupplier;

	/**
	 * Creates a link between a supplier and a variation and adds supplier data.
	 */
	public function create(
		array $data
	):VariationSupplier;

	/**
	 * Updates the data of a supplier linked to a variation. The variation supplier ID must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):VariationSupplier;

	/**
	 * Deletes a link between a supplier and a variation. The variation supplier ID must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Lists the data of the suppliers linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Lists the data of the suppliers linked to a variation with inheritance details. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):array;

}