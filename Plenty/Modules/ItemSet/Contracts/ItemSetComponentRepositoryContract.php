<?php
namespace Plenty\Modules\ItemSet\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\ItemSet\Models\ItemSet;
use Plenty\Modules\ItemSet\Models\ItemSetComponent;
use Plenty\Modules\RestDocumentation\Annotations\Rest;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item set component repository
 */
interface ItemSetComponentRepositoryContract 
{

	/**
	 * Gets an item set component. The ID of the item set component must be specified.
	 */
	public function show(
		int $id, 
		array $with
	):ItemSetComponent;

	/**
	 * Gets an item set component. The item ID of the item set and the component ID must be specified.
	 */
	public function get(
		int $setId, 
		int $id
	):ItemSetComponent;

	/**
	 * Creates an item set component.
	 */
	public function create(
		int $setConfigId, 
		array $data
	):ItemSetComponent;

	/**
	 * Creates a link between an item and a set item and adds the item as a set component.
	 */
	public function createComponents(
		int $setId, 
		array $data
	):ItemSetComponent;

	/**
	 * Updates the item set components of a set item.
	 */
	public function updateComponents(
		int $setId, 
		array $data
	):ItemSetComponent;

	/**
	 * Updates an item set component. The item ID of the set and the ID of the set component must be specified.
	 */
	public function update(
		int $setId, 
		int $id, 
		array $data
	):ItemSetComponent;

	/**
	 * Removes all item set components from an item set.
	 */
	public function deleteComponents(
		int $setId, 
		array $data
	):DeleteResponse;

	/**
	 * Deletes the link between an item set component and an item set. The item ID of the set and the ID of the set component must be specified.
	 */
	public function delete(
		int $setId, 
		int $id
	):DeleteResponse;

	/**
	 * Lists all item set components.
	 */
	public function all(
	):array;

	/**
	 * Lists the item set components of a set. The item ID of the item set must be specified.
	 */
	public function findBySetId(
		int $setId, 
		array $with
	):array;

	/**
	 * Lists the item set components of a set. The item ID of the item set component must be specified.
	 */
	public function findByItemId(
		int $itemId
	):array;

}