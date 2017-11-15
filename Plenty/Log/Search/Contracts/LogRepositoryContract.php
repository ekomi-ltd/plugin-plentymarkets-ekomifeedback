<?php
namespace Plenty\Log\Search\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Log\Models\Log;
use Plenty\Repositories\Models\FilteredPaginatedResult;

/**
 * Contract for logs.
 */
interface LogRepositoryContract 
{

	/**
	 * Search logs with the given filters.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		string $sortBy = "createdAt", 
		string $sortOrder = "desc", 
		array $with = []
	):FilteredPaginatedResult;

	/**
	 * Get log entry by id.
	 */
	public function get(
		 $id
	):Log;

}