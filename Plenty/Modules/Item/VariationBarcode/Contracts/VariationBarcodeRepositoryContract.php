<?php
namespace Plenty\Modules\Item\VariationBarcode\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationBarcode\Models\VariationBarcode;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation barcode repository
 */
interface VariationBarcodeRepositoryContract 
{

	/**
	 * Gets a variation barcode. The ID of the variation and the ID of the barcode must be specified.
	 */
	public function show(
		int $barcodeId, 
		int $variationId
	):VariationBarcode;

	/**
	 * Creates a variation barcode.
	 */
	public function create(
		array $data
	):VariationBarcode;

	/**
	 * Updates a variation barcode. The ID of the variation and the ID of the barcode must be specified.
	 */
	public function update(
		array $data, 
		int $barcodeId, 
		int $variationId
	):VariationBarcode;

	/**
	 * Deletes a variation barcode. The ID of the variation and the ID of the barcode must be specified.
	 */
	public function delete(
		int $barcodeId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists all barcodes of a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

}