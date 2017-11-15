<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;


/**
 * The storage shelf model
 */
abstract class Shelf 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$rackId;
	public		$name;
	public		$level;
	public		$rack;
	public		$storageLocations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}