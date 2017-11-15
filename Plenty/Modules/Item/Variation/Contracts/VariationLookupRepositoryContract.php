<?php
namespace Plenty\Modules\Item\Variation\Contracts;


/**
 * lookup repository for variations
 */
interface VariationLookupRepositoryContract 
{

	public function hasBarcode(
		string $code, 
		int $barcodeId = null
	):VariationLookupRepositoryContract;

	public function hasId(
		int $id
	):VariationLookupRepositoryContract;

	public function hasItemId(
		int $itemId
	):VariationLookupRepositoryContract;

	public function hasExternalId(
		string $externalId
	):VariationLookupRepositoryContract;

	public function hasNumber(
		string $number
	):VariationLookupRepositoryContract;

	public function hasSupplierItemNumber(
		string $supplierVariationNumber
	):VariationLookupRepositoryContract;

	public function hasAttributeValueMap(
		array $attributeValueMap
	):VariationLookupRepositoryContract;

	public function limit(
		int $limit
	):VariationLookupRepositoryContract;

	public function lookup(
	):array;

}