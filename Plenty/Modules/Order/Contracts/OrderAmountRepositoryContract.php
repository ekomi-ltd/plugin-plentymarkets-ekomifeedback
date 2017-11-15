<?php
namespace Plenty\Modules\Order\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Models\OrderAmount;

/**
 * This interface allows you to get and list order amounts and their vats.
 */
interface OrderAmountRepositoryContract 
{

	/**
	 * Get an order amount for an order in a currency. The ID of the order must be specified. The currency is optional. If no currency is specified, the order amount entry will be returned in the default system currency.
	 */
	public function getByOrderId(
		int $orderId, 
		string $currency = null
	):OrderAmount;

	/**
	 * Get an order amount. The ID of the order amount must be specified.
	 */
	public function getById(
		int $id
	):OrderAmount;

	/**
	 * List all order amounts of an order. The ID of the order must be specified.
	 */
	public function listByOrderId(
		int $orderId
	):array;

}