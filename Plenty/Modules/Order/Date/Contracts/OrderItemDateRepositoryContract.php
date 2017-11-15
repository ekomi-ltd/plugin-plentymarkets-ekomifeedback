<?php
namespace Plenty\Modules\Order\Date\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelAlreadyExistsException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Date\Models\OrderItemDate;

/**
 * The OrderItemDateRepositoryContract contains the functionality to get, create, update and delete OrderItemDate instances.
 */
interface OrderItemDateRepositoryContract 
{

	/**
	 * Get an order item date
	 */
	public function find(
		int $id
	):OrderItemDate;

	/**
	 * Create an order item date
	 */
	public function create(
		array $data = []
	):OrderItemDate;

	/**
	 * Update an order date
	 */
	public function update(
		array $data, 
		int $id
	):OrderItemDate;

	/**
	 * Create or update an order item date
	 */
	public function save(
		array $data = []
	):OrderItemDate;

	/**
	 * Delete a date
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Get an order item date by an order item and an order date type.
	 */
	public function findByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Create an order item date by an order item and an order date type.
	 */
	public function createByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Update an order item date by an order item and an order date type.
	 */
	public function updateByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Delete an order item date by an order item and an order date type.
	 */
	public function deleteByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):bool;

	/**
	 * List order item dates of an order item.
	 */
	public function findByOrderItemId(
		int $orderItemId
	);

}