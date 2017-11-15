<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertyMarketReference;

/**
 * The contract for the property market reference repository
 */
interface PropertyMarketReferenceRepositoryContract 
{

	/**
	 * Creates a property market reference. The ID of the property must be specified.
	 */
	public function create(
		array $data, 
		int $propertyId
	):PropertyMarketReference;

	/**
	 * Deletes a property market reference. The ID of the property and the language must be specified.
	 */
	public function delete(
		int $propertyId, 
		float $marketReference
	):bool;

	/**
	 * Updates a property market reference. The ID of the property and the language must be specified.
	 */
	public function update(
		array $data, 
		int $propertyId, 
		float $marketReference
	):PropertyMarketReference;

	/**
	 * Gets a property market reference. The ID of the property and the language must be specified.
	 */
	public function findOne(
		int $propertyId, 
		float $marketReference
	):PropertyMarketReference;

	/**
	 * List of property market references. The ID of the property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):PropertyMarketReference;

	/**
	 * Lists all property market references.
	 */
	public function getPropertyMarketReferences(
		float $referrerId, 
		int $componentId = null
	):array;

}