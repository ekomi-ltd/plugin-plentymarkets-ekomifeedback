<?php
namespace Plenty\Modules\Accounting\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Accounting\Models\AccountingLocation;

/**
 * The repository to get, create, update and delete accounting locations.
 */
interface AccountingLocationRepositoryContract 
{

	/**
	 * Get an accounting location. The ID of the location must be specified.
	 */
	public function get(
		int $id
	):AccountingLocation;

	/**
	 * List accounting locations for a client. The plenty ID of the client must be specified.
	 */
	public function listByPlentyId(
		int $plentyId
	);

	/**
	 * Create an accounting location.
	 */
	public function create(
		array $data
	):AccountingLocation;

	/**
	 * Update an accounting location. The ID of the location must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):AccountingLocation;

	/**
	 * Delete an accounting location. The ID of the location must be specified.
	 */
	public function delete(
		int $id
	):bool;

}