<?php
namespace Plenty\Modules\Item\VariationBarcode\Models;


/**
 * Variation Barcode
 */
abstract class VariationBarcode 
{

	const CREATED_AT = 'plenty_item_variation_barcode_created_timestamp';

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'updatedAt';
	public		$code;
	public		$barcodeId;
	public		$variationId;
	public		$createdAt;
	public		$barcode;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}