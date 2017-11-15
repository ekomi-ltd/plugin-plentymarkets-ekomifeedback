<?php
namespace Plenty\Modules\Item\Availability\Contracts;

use Plenty\Modules\Item\Availability\Models\Availability;

/**
 * Repository for item availability.
 */
interface AvailabilityRepositoryContract 
{

	/**
	 * Gets an item availability. The ID of the availability must be specified.
	 */
	public function findAvailability(
		int $id
	):Availability;

	/**
	 * Gets an item availability. The ID of the availability must be specified.
	 */
	public function find(
		int $id
	):Availability;

	/**
	 * Updates an item availability.
	 */
	public function update(
		array $data
	):Availability;

	/**
	 * Lists all item availabilities.
	 */
	public function all(
	):array;

}