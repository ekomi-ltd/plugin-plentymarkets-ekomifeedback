<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationStock
 */
abstract class VariationStock 
{
	public		$warehouseId;
	public		$stockPhysical;
	public		$reservedStock;
	public		$reservedEbay;
	public		$reorderDelta;
	public		$stockNet;
	public		$updateAmazon;
	public		$updatePixmania;
	public		$warehouseType;
	public		$reordered;
	public		$reservedBundle;
	public		$averagePurchasePrice;
	public		$warehousePriority;
	public		$lastUpdateTimestamp;
	public		$lastCalculateTimestamp;
	public		$reservedOutOfStock;
	public		$reservedBasket;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}