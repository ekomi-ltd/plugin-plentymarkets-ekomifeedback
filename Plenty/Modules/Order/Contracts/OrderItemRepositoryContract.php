<?php
namespace Plenty\Modules\Order\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Exceptions\OrderItemDeleteException;
use Plenty\Modules\Order\Models\OrderItem;

/**
 * The OrderItemRepositoryContract is the interface for the order item repository. This interface allows you to find, create and update order items. An order item can be e.g. items, surcharges and coupons. Each order item is given a unique id, which links it to a specific order.
 */
interface OrderItemRepositoryContract 
{

	/**
	 * Get an order item
	 */
	public function getOrderItem(
		int $orderItemId
	):OrderItem;

	/**
	 * Delete an order item
	 */
	public function deleteOrderItem(
		int $orderId, 
		int $orderItemId
	):bool;

}