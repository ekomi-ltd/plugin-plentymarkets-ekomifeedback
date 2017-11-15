<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyName;

/**
 * The contract for the property name repository
 */
interface PropertyNameRepositoryContract 
{

	/**
	 * Creates a property name. The ID of the property must be specified.
	 */
	public function create(
		array $data, 
		int $propertyId
	):PropertyName;

	/**
	 * Deletes a property name. The ID of the property and the language must be specified.
	 */
	public function delete(
		int $propertyId, 
		string $lang
	):bool;

	/**
	 * Updates a property name. The ID of the property and the language must be specified.
	 */
	public function update(
		array $data, 
		int $propertyId, 
		string $lang
	):PropertyName;

	/**
	 * Gets a property name. The ID of the property and the language must be specified.
	 */
	public function findOne(
		int $propertyId, 
		string $lang
	):PropertyName;

	/**
	 * Lists property names. The ID of the property must be specified.
	 */
	public function findBypropertyId(
		int $propertyId
	):PropertyName;

}