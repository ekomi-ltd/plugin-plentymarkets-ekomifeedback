<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * An Event class fired after a payment is assigned and if the order is paid in advance.
 */
abstract class OrderPrepaid extends \Plenty\Modules\Order\Events\OrderPaidEvent 

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