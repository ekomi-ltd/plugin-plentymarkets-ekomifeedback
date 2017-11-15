<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * An Event class fired after a payment assignment when the order is fully paid.
 */
abstract class OrderFullyPaid extends \Plenty\Modules\Order\Events\OrderPaidEvent 

{

	/**
	 * OrderEvent constructor.
	 */
	abstract public function __construct(
		Order $order
	);

	/**
	 * Get the order instance.
	 */
	abstract public function getOrder(
	):Order;

}