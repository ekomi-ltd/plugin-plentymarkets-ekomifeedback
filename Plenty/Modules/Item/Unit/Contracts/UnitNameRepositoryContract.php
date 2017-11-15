<?php
namespace Plenty\Modules\Item\Unit\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Unit\Models\UnitName;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the unit name repository
 */
interface UnitNameRepositoryContract 
{

	/**
	 * Creates a unit name. The ID of the unit must be specified.
	 */
	public function create(
		array $data, 
		int $unitId
	):UnitName;

	/**
	 * Deletes a unit name. The ID of the unit and the language must be specified.
	 */
	public function delete(
		int $unitId, 
		string $lang
	):DeleteResponse;

	/**
	 * Updates a unit name. The ID of the unit and the language must be specified.
	 */
	public function update(
		array $data, 
		int $unitId, 
		string $lang
	):UnitName;

	/**
	 * Gets a unit name. The ID of the unit and the language must be specified.
	 */
	public function findOne(
		int $unitId, 
		string $lang
	):UnitName;

	/**
	 * Lists unit names. The ID of the unit must be specified.
	 */
	public function findByUnitId(
		int $unitId
	):array;

}