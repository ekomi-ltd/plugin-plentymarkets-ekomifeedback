<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyGroup;

/**
 * The contract for the property group repository
 */
interface PropertyGroupRepositoryContract 
{

	/**
	 * Creates a property group.
	 */
	public function create(
		array $data
	):PropertyGroup;

	/**
	 * Gets a property group. The ID of the property group must be specified.
	 */
	public function show(
		int $id
	):PropertyGroup;

	/**
	 * Updates a property group. The ID of the property group must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):PropertyGroup;

	/**
	 * Deletes a property group. The ID of the property group must be specified.
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Gets a property group. The ID of the property group must be specified.
	 */
	public function findById(
		int $id
	):PropertyGroup;

	/**
	 * Lists all property groups.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

	/**
	 * Gets a property group. The backend name of the property group must be specified.
	 */
	public function findByBackendName(
		string $backendName
	):PropertyGroup;

}