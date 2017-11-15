<?php
namespace Plenty\Modules\Item\VariationProperty\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationProperty\Models\VariationProperty;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation property repository
 */
interface VariationPropertyRepositoryContract 
{

	/**
	 * Creates a link between a property and a variation and adds property data.
	 */
	public function create(
		array $data
	):VariationProperty;

	/**
	 * Updates the data of a property linked to a variation. The ID of the variation property must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):VariationProperty;

	/**
	 * Deletes the link between a property and a variation. The ID of the variation property must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Gets the data of a property linked to a variation. The ID of the variation property must be specified.
	 */
	public function findByVariationId(
		int $id
	):VariationProperty;

	/**
	 * Lists all properties linked to variations.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50
	):array;

}