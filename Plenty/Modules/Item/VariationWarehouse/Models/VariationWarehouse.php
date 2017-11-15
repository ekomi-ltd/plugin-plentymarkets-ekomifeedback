<?php
namespace Plenty\Modules\Item\VariationWarehouse\Models;


/**
 * Variation Warehouse
 */
abstract class VariationWarehouse 
{

	const CREATED_AT = 'plenty_item_variation_warehouse_last_update_timestamp';

	const UPDATED_AT = 'plenty_item_variation_warehouse_created_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$variationId;
	public		$warehouseId;
	public		$warehouseZoneId;
	public		$storageLocationType;
	public		$reorderLevel;
	public		$maximumStock;
	public		$stockTurnoverInDays;
	public		$storageLocation;
	public		$stockBuffer;
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