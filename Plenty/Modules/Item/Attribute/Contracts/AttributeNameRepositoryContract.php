<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute name repository
 */
interface AttributeNameRepositoryContract 
{

	/**
	 * Creates an attribute name. The ID of the attribute must be specified.
	 */
	public function create(
		array $data, 
		int $attributeId
	):AttributeName;

	/**
	 * Deletes an attribute name. The ID of the attribute and the language must be specified.
	 */
	public function delete(
		int $attributeId, 
		string $lang
	):DeleteResponse;

	/**
	 * Updates an attribute name. The ID of the attribute and the language must be specified.
	 */
	public function update(
		array $data, 
		int $attributeId, 
		string $lang
	):AttributeName;

	/**
	 * Gets an attribute name. The ID of the attribute and the language must be specified.
	 */
	public function findOne(
		int $attributeId, 
		string $lang
	):AttributeName;

	/**
	 * Lists attribute names. The ID of the attribute must be specified.
	 */
	public function findByAttributeId(
		int $attributeId
	):AttributeName;

}