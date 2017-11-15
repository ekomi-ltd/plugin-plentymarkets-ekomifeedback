<?php
namespace Plenty\Modules\Item\Barcode\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Barcode\Models\Barcode;
use Plenty\Modules\Item\Barcode\Models\BarcodeLinkReferrer;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the barcode repository
 */
interface BarcodeRepositoryContract 
{

	/**
	 * Gets a barcode. The ID of the barcode must be specified.
	 */
	public function showBarcode(
		int $barcodeId
	):Barcode;

	/**
	 * Creates a barcode.
	 */
	public function createBarcode(
		array $data
	):Barcode;

	/**
	 * Updates a barcode. The ID of the barcode must be specified.
	 */
	public function updateBarcode(
		array $data, 
		int $barcodeId
	):Barcode;

	/**
	 * Deletes a barcode. The ID of the barcode must be specified.
	 */
	public function deleteBarcode(
		int $barcodeId
	):DeleteResponse;

	/**
	 * Gets a barcode. The ID of the barcode must be specified.
	 */
	public function findBarcodeById(
		int $barcodeId
	):Barcode;

	/**
	 * Lists barcodes. The type of the barcode must be specified.
	 */
	public function findBarcodesByType(
		string $barcodeType, 
		int $perPage = 50
	):array;

	/**
	 * Lists all barcodes.
	 */
	public function allBarcodes(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Creates new barcode referrer for specified referrer.
	 */
	public function createBarcodeReferrerRelation(
		array $data, 
		int $barcodeId
	):BarcodeLinkReferrer;

	/**
	 * Deletes barcode referrer with specified referrer.
	 */
	public function deleteBarcodeReferrerRelation(
		float $referrer, 
		int $barcodeId
	):DeleteResponse;

	/**
	 * Gets barcode referrer by specified referrer.
	 */
	public function findBarcodesByReferrerRelation(
		float $referrer, 
		int $perPage = 50
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