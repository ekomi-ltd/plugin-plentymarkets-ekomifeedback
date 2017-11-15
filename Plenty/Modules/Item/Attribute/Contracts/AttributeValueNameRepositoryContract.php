<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeValueName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the attribute value name repository
 */
interface AttributeValueNameRepositoryContract 
{

	/**
	 * Creates an attribute value name. The ID of the attribute value must be specified.
	 */
	public function create(
		array $data, 
		int $valueId
	):AttributeValueName;

	/**
	 * Deletes an attribute value name. The ID of the attribute value and the language must be specified.
	 */
	public function delete(
		int $valueId, 
		string $lang
	):DeleteResponse;

	/**
	 * Updates an attribute value name. The ID of the attribute value and the language must be specified.
	 */
	public function update(
		array $data, 
		int $valueId, 
		string $lang
	):AttributeValueName;

	/**
	 * Gets an attribute value name. The ID of the attribute value and the language must be specified.
	 */
	public function findOne(
		int $valueId, 
		string $lang
	):AttributeValueName;

	/**
	 * Lists attribute value names. The ID of the attribute value must be specified.
	 */
	public function findByValueId(
		int $valueId
	):AttributeValueName;

}