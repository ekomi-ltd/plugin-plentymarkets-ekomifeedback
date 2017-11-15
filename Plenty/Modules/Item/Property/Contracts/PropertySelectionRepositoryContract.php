<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertySelection;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the property selection repository
 */
interface PropertySelectionRepositoryContract 
{

	/**
	 * Creates a property selection. The ID of the property must be specified.
	 */
	public function create(
		array $data, 
		int $propertyId
	):PropertySelection;

	/**
	 * Creates a property selection lang. The ID of the property selection must be specified.
	 */
	public function createLang(
		array $data, 
		int $propertyId, 
		int $id
	):PropertySelection;

	/**
	 * List of property selections. The ID of the property must be specified.
	 */
	public function findByProperty(
		int $propertyId, 
		string $lang = null
	):array;

	/**
	 * List of property selections. The ID of the property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):PropertySelection;

	/**
	 * Deletes a property selection. The ID of the property selection must be specified.
	 */
	public function deleteSelection(
		int $id
	):DeleteResponse;

	/**
	 * Deletes a property selection in a specified language. The ID of the property selection and the language must be specified.
	 */
	public function delete(
		int $id, 
		string $lang
	):bool;

	/**
	 * Get a property selection in the specified language. The ID of the property selection and the language must be specified.
	 */
	public function findOne(
		int $id, 
		string $lang
	):PropertySelection;

	/**
	 * Get a property selection. The ID of the property selection must be specified.
	 */
	public function findSelection(
		int $id
	):array;

	/**
	 * Updates a property selection. The ID of the property selection and the language must be specified.
	 */
	public function update(
		array $data, 
		int $id, 
		string $lang
	):PropertySelection;

}