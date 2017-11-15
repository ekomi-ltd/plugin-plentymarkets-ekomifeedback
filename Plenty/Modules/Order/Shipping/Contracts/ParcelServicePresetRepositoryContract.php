<?php
namespace Plenty\Modules\Order\Shipping\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Order\Shipping\ParcelService\Models\ParcelServicePreset;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The ParcelServicePresetRepositoryContract is the interface for the shipping profile repository. This interface allows to get a shipping profile by the ID or list all shipping profiles.
 */
interface ParcelServicePresetRepositoryContract 
{

	/**
	 * Lists shipping profiles.
	 */
	public function getPresetList(
		array $columns = [], 
		string $with = null, 
		string $parcelServiceName = null, 
		array $filters = []
	);

	/**
	 * Gets a shipping profile. The ID of the shipping profile must be specified.
	 */
	public function getPresetById(
		int $presetId, 
		array $columns = []
	):ParcelServicePreset;

	/**
	 * Calculate shipping costs and list last weighted preset combinations.
	 */
	public function getLastWeightedPresetCombinations(
		Basket $basket, 
		int $contactClass, 
		array $customParams = []
	):array;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}