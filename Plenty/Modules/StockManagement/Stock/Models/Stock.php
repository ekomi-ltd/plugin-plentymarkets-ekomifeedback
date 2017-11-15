<?php
namespace Plenty\Modules\StockManagement\Stock\Models;


/**
 * The stock model. There are 4 different stock terms used in plentymarkets. The physical stock, the net stock, the reserved stock and the stock reserved for listings.
 */
abstract class Stock 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$itemId;
	public		$variationId;
	public		$warehouseId;
	public		$stockPhysical;
	public		$reservedStock;
	public		$reservedEbay;
	public		$reorderDelta;
	public		$stockNet;
	public		$reordered;
	public		$reservedBundle;
	public		$averagePurchasePrice;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}