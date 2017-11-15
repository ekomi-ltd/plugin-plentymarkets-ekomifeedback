<?php
namespace Plenty\Modules\Order\Contracts;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Scheduler\Models\OrderScheduler;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderRepositoryContract is the interface for the order repository. This interface allows you to find, create and update orders. There are many different order types and the data returned depends on the order type.
 */
interface OrderRepositoryContract 
{

	/**
	 * Get an order
	 */
	public function findOrderById(
		int $orderId, 
		array $with = []
	):Order;

	/**
	 * Create an order
	 */
	public function createOrder(
		array $data, 
		string $coupon = null
	):Order;

	/**
	 * Update an order
	 */
	public function updateOrder(
		array $data, 
		int $orderId
	):Order;

	/**
	 * Delete an order
	 */
	public function deleteOrder(
		int $orderId
	):bool;

	/**
	 * Restore an order
	 */
	public function undeleteOrder(
		int $orderId, 
		float $status
	):Order;

	/**
	 * Checks whether an order has been deleted or not.
	 */
	public function isDeleted(
		int $orderId
	):bool;

	/**
	 * Get a scheduler order
	 */
	public function findSchedulerById(
		int $schedulerId
	):OrderScheduler;

	/**
	 * List orders of a contact
	 */
	public function allOrdersByContact(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List orders that include one or more variations from a supplier
	 */
	public function allOrdersBySupplier(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List orders sent by a contact
	 */
	public function allOrdersByContactSender(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * Get latest order of a contact
	 */
	public function getLatestOrderByContactId(
		int $contactId, 
		array $with = []
	):Order;

	/**
	 * List orders
	 */
	public function searchOrders(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List package numbers of an order
	 */
	public function getPackageNumbers(
		int $orderId
	):array;

	/**
	 * Cancel an order
	 */
	public function cancelOrder(
		int $orderId, 
		array $data
	);

	/**
	 * Find the order for the given order ID and access key.
	 */
	public function findOrderByAccessKey(
		int $orderId, 
		string $accessKey
	):Order;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}