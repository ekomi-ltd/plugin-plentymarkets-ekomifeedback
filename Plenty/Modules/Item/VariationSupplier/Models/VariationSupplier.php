<?php
namespace Plenty\Modules\Item\VariationSupplier\Models;


/**
 * Variation Supplier
 */
abstract class VariationSupplier 
{

	const CREATED_AT = 'plenty_item_variation_supplier_last_update_timestamp';

	const UPDATED_AT = 'plenty_item_variation_supplier_created_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$id;
	public		$variationId;
	public		$supplierId;
	public		$purchasePrice;
	public		$minimumPurchase;
	public		$itemNumber;
	public		$lastPriceQuery;
	public		$deliveryTimeInDays;
	public		$discount;
	public		$isDiscountable;
	public		$packagingUnit;
	public		$lastUpdateTimestamp;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}