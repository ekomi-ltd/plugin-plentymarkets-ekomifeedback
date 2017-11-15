<?php
namespace Plenty\Modules\Item\Manufacturer\Contracts;

use Plenty\Modules\Item\Manufacturer\Models\ManufacturerCommission;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the manufacturer commission repository
 */
interface ManufacturerCommissionRepositoryContract 
{

	/**
	 * Gets a manufacturer commission. The ID of the manufacturer commission must be specified.
	 */
	public function find(
		int $id
	):ManufacturerCommission;

	/**
	 * Creates a manufacturer commission.
	 */
	public function create(
		array $data
	):ManufacturerCommission;

	/**
	 * Updates a manufacturer commission. The ID of the manufacturer commission must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):ManufacturerCommission;

	/**
	 * Deletes a manufacturer commission. The ID of the manufacturer commission must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Lists manufacturer commissions. The ID of the manufacturer must be specified.
	 */
	public function findByManufacturerId(
		int $manufacturerId
	):array;

}