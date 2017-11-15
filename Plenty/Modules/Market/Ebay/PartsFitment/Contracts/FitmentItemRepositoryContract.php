<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\Fitment;
use Plenty\Modules\Market\Ebay\PartsFitment\Models\FitmentItem;

/**
 * The contract for the fitment item repository.
 */
interface FitmentItemRepositoryContract 
{

	/**
	 * Returns a fitment item by an ID.
	 */
	public function find(
		int $id
	):FitmentItem;

	/**
	 * Creates a new fitment item.
	 */
	public function create(
		array $data, 
		int $id
	):FitmentItem;

	/**
	 * Updates an existing fitment item.
	 */
	public function update(
		array $data, 
		int $id
	):FitmentItem;

	/**
	 * Deletes a fitment item. Returns `true` if the deletion was successful, otherwise `false`.
	 */
	public function delete(
		int $id
	):bool;

}