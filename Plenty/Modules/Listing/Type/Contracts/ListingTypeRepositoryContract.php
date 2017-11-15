<?php
namespace Plenty\Modules\Listing\Type\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Listing\Type\Models\ListingType;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the listing type repository.
 */
interface ListingTypeRepositoryContract 
{

	/**
	 * Get a listing type
	 */
	public function get(
		int $id, 
		array $with = []
	):ListingType;

	/**
	 * List listing types
	 */
	public function all(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

}