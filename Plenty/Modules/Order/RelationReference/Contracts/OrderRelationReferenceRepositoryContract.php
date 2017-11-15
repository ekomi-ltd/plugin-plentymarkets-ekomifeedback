<?php
namespace Plenty\Modules\Order\RelationReference\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\RelationReference\Models\OrderRelationReference;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, create, update and delete order relation references.
 */
interface OrderRelationReferenceRepositoryContract 
{

	/**
	 * Get a relation reference by ID
	 */
	public function find(
		int $id
	):OrderRelationReference;

	/**
	 * Get a relation reference by composite key
	 */
	public function findByComposite(
		int $orderId, 
		string $referenceType, 
		string $relation
	):OrderRelationReference;

	/**
	 * List relation references by order ID
	 */
	public function findByOrderId(
		int $orderId
	);

	/**
	 * List relation references by any values
	 */
	public function findByAnyValues(
		array $values, 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Create a relation reference
	 */
	public function create(
		array $data
	):OrderRelationReference;

	/**
	 * Update a relation reference by ID
	 */
	public function update(
		int $id, 
		array $data
	):OrderRelationReference;

	/**
	 * Update a relation reference by composite key
	 */
	public function updateByComposite(
		int $orderId, 
		string $referenceType, 
		string $relation, 
		array $data
	):OrderRelationReference;

	/**
	 * Delete a relation reference by ID
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Delete a relation reference by composite key
	 */
	public function deleteByComposite(
		int $orderId, 
		string $referenceType, 
		string $relation
	):bool;

}