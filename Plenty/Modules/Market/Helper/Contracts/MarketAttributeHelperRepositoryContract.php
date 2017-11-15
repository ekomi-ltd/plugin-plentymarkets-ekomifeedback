<?php
namespace Plenty\Modules\Market\Helper\Contracts;

use Plenty\Modules\Item\DataLayer\Models\Record;

/**
 * The contract for the market attribute helper repository.
 */
interface MarketAttributeHelperRepositoryContract 
{

	/**
	 * Returns the attribute name for the given attribute id
	 */
	public function getAttributeName(
		int $id, 
		string $lang
	):string;

	/**
	 * Returns the attribute value name for the given attribute value id
	 */
	public function getAttributeValueName(
		int $attributeId, 
		int $valueId, 
		string $lang
	):string;

	/**
	 * Returns all attribute names for the given language as a string delimited by the given delimiter.
	 */
	public function getAttributeNames(
		Record $record, 
		string $lang = "de", 
		string $delimiter = ","
	):string;

	/**
	 * Returns the attribute value set short frontend name. Ex.: blue, XL
	 */
	public function getAttributeValueSetShortFrontendName(
		Record $record, 
		string $lang = "de", 
		string $delimiter = ", ", 
		array $attributeNameCombination = []
	):string;

	/**
	 * Returns the combination of attribute names with their attribute values.
	 */
	public function getAttributeNameAndValueCombination(
		string $attributeNames, 
		string $attributeValues, 
		string $delimiter = ","
	):string;

	/**
	 * Returns the name for a variation with all attribute names and attribute values. Ex.: T-Shirt (Size: L, Color: red)
	 */
	public function getVariationNameAndAttributeNameAndValueCombination(
		Record $record, 
		string $lang
	):string;

}