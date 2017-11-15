<?php
namespace Plenty\Modules\ItemSet\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\ItemSet\Models\ItemSet;
use Plenty\Modules\RestDocumentation\Annotations\Rest;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item set repository
 */
interface ItemSetRepositoryContract 
{

	/**
	 * Gets an item set. The item ID of the set must be specified.
	 */
	public function show(
		int $id
	):ItemSet;

	/**
	 * Creates an item set.
	 */
	public function create(
		array $data
	):ItemSet;

	/**
	 * Creates item sets.
	 */
	public function createSets(
		array $data
	):ItemSet;

	/**
	 * Updates item sets.
	 */
	public function updateSets(
		array $data
	):array;

	/**
	 * Updates an item set. The item ID of the set must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):ItemSet;

	/**
	 * Deletes item sets.
	 */
	public function deleteSets(
		array $data
	):DeleteResponse;

	/**
	 * Deletes an item set configuration. The ID must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Lists all item set configurations.
	 */
	public function all(
	):array;

}