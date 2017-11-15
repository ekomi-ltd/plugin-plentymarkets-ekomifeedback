<?php
namespace Plenty\Modules\EventProcedures\Events;

use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Ticket\Models\Ticket;

/**
 * plentymarkets event procedures triggered
 */
abstract class EventProceduresTriggered 
{

	abstract public function getTicket(
	):Ticket;

	/**
	 * Get the order that triggered the event.
	 */
	abstract public function getOrder(
	):Order;

}