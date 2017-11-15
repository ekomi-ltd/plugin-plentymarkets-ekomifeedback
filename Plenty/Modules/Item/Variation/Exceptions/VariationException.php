<?php
namespace Plenty\Modules\Item\Variation\Exceptions;


/**
 * Class VariationException
 */
abstract class VariationException extends \Exception 

{

	/**
	 * Variation Number already exists
	 */
	const ERR_DUPLICATE_CUSTOM_NUMBER = 1;

	/**
	 * Duplicate entity
	 */
	const ERR_DUPLICATE_ENTITY = 2;

	/**
	 * mandatory field 'ID' is empty or invalid
	 */
	const ERR_INVALID_OR_MISSING_ID = 3;

	/**
	 * Variation Number too long. 64 digits allowed.
	 */
	const ERR_NUMBER_TOO_LONG = 4;

	/**
	 * Invalid or missing itemID
	 */
	const ERR_INVALID_ITEM_ID = 5;

	/**
	 * Invalid variationID for categoryVariationId, marketVariationId, clientVariationId, salesPriceVariationId, supplierVariationId, warehouseVariationId'
	 */
	const ERR_INVALID_VAR_ID = 6;

	/**
	 * A main variation already exists
	 */
	const ERR_MAIN_VARIATION_EXISTS = 7;

	/**
	 * Can not remove main variation
	 */
	const ERR_MAIN_VARIATION_REQUIRED = 8;

}