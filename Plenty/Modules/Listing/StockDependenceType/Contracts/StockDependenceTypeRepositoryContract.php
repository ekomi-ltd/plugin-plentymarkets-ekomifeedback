<?php
namespace Plenty\Modules\Listing\StockDependenceType\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Listing\StockDependenceType\Models\StockDependenceType;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the listing stock dependence type repository.
 */
interface StockDependenceTypeRepositoryContract 
{

	/**
	 * Get a listing stock dependence type
	 */
	public function get(
		int $id, 
		array $with = []
	):StockDependenceType;

	/**
	 * List listing stock dependence types
	 */
	public function all(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

}