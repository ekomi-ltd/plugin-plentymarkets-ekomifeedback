<?php
namespace Plenty\Modules\StockManagement\Warehouse\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\StockManagement\Warehouse\Models\Warehouse;
use\Contracts;

/**
 * The WarehouseRepositoryContract is the interface for the warehouse repository. This interface allows you to either get one warehouse by specifying the id or to list all warehouses.
 */
interface WarehouseRepositoryContract 
{

	/**
	 * Get a warehouse
	 */
	public function findById(
		int $warehouseId, 
		array $with = []
	):Warehouse;

	/**
	 * List warehouses
	 */
	public function all(
		array $with = [], 
		array $columns = []
	):array;

	/**
	 * Create a warehouse
	 */
	public function create(
		array $data
	):Warehouse;

}