<?php
namespace Plenty\Modules\StockManagement\Stock\Models;


/**
 * The stock storage location model contains all information about the stock that is stored at one storage location.
 */
abstract class StockStorageLocation 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$itemId;
	public		$variationId;
	public		$storageLocationId;
	public		$warehouseId;
	public		$quantity;
	public		$updatedAt;
	public		$storageLocation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}