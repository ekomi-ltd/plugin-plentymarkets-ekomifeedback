<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyGroupName;

/**
 * The contract for the property group name repository
 */
interface PropertyGroupNameRepositoryContract 
{

	/**
	 * Creates a property group name. The ID of the property group must be specified.
	 */
	public function create(
		array $data, 
		int $propertyGroupId
	):PropertyGroupName;

	/**
	 * Deletes a property group name. The ID of the property group and the language must be specified.
	 */
	public function delete(
		int $propertyGroupId, 
		string $lang
	):bool;

	/**
	 * Updates a property group name. The ID of the property group and the language must be specified.
	 */
	public function update(
		array $data, 
		int $propertyGroupId, 
		string $lang
	):PropertyGroupName;

	/**
	 * Gets a property group name. The ID of the property group and the language must be specified.
	 */
	public function findOne(
		int $propertyGroupId, 
		string $lang
	):PropertyGroupName;

	/**
	 * Lists property group names. The ID of the property group must be specified.
	 */
	public function findByPropertyGroupId(
		int $propertyGroupId
	):array;

}