<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationWarehouse
 */
abstract class VariationWarehouse 
{
	public		$variationId;
	public		$warehouseId;
	public		$warehouseZoneId;
	public		$storageLocationType;
	public		$reorderLevel;
	public		$maximumStock;
	public		$stockBuffer;
	public		$stockTurnoverInDays;
	public		$storageLocationId;
	public		$lastUpdateTimestamp;
	public		$createdTimestamp;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}