<?php
namespace Plenty\Modules\Order\Status\Contracts;

use Plenty\Modules\Order\Status\Models\OrderStatus;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Status\Models\OrderStatusName;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The StatusRepositoryContract is the interface for the status repository. This interface allows you to find, create and update status.
 */
interface StatusRepositoryContract 
{

	/**
	 * Get a status
	 */
	public function findStatusById(
		float $statusId, 
		array $with = []
	):OrderStatus;

	/**
	 * Get a name of a status in one language
	 */
	public function findStatusNameById(
		float $statusId, 
		string $lang
	):OrderStatusName;

	/**
	 * List statuses
	 */
	public function searchStatus(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):array;

}