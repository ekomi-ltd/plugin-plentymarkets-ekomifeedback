<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\Fitment;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\FitmentItem;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\FitmentItemProperty;

/**
 * The contract for the fitment item property repository.
 */
interface FitmentItemPropertyRepositoryContract 
{

	/**
	 * Returns a fitment item property by an ID.
	 */
	public function find(
		int $id
	):FitmentItemProperty;

	/**
	 * Creates a new fitment item property.
	 */
	public function create(
		array $data, 
		int $id
	):FitmentItemProperty;

	/**
	 * Updates an existing fitment item property.
	 */
	public function update(
		array $data, 
		int $id
	):FitmentItem;

	/**
	 * Deletes a fitment item property. Returns `true` if the deletion was successful, otherwise `false`.
	 */
	public function delete(
		int $id
	):bool;

}