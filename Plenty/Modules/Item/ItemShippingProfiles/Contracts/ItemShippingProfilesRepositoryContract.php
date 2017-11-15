<?php
namespace Plenty\Modules\Item\ItemShippingProfiles\Contracts;

use Plenty\Modules\Item\ItemShippingProfiles\Models\ItemShippingProfiles;

/**
 * Repository for ItemShippingProfiles
 */
interface ItemShippingProfilesRepositoryContract 
{

	/**
	 * Finds a shipping profile link by ID
	 */
	public function find(
		int $id
	):ItemShippingProfiles;

	/**
	 * Lists all shipping profiles activated for an item
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Activates a shipping profile for an item
	 */
	public function create(
		array $data
	):ItemShippingProfiles;

	/**
	 * Deactivates a shipping profile for an item
	 */
	public function delete(
		int $id
	):array;

}