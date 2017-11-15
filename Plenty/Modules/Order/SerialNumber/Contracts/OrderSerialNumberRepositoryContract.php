<?php
namespace Plenty\Modules\Order\SerialNumber\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\SerialNumber\Models\OrderSerialNumber;

/**
 * List serial numbers for orders
 */
interface OrderSerialNumberRepositoryContract 
{

	/**
	 * List serial numbers of an order
	 */
	public function listSerialNumbersByOrder(
		int $orderId
	);

	/**
	 * List serial numbers if an order item
	 */
	public function listSerialNumbersByOrderItem(
		int $orderItemId
	);

}