<?php
namespace Plenty\Modules\Order\Events\Canceled;

use Plenty\Modules\Order\Events\OrderEvent;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired before an order will be canceled.
 */
abstract class BeforeOrderCanceled extends \Plenty\Modules\Order\Events\OrderEvent 

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