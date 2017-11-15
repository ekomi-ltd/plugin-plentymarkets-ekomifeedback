<?php
namespace Plenty\Modules\Order\Services;

use Plenty\Modules\Order\Events\Created\CreditNoteCreated;
use Plenty\Modules\Order\Events\Created\DeliveryOrderCreated;
use Plenty\Modules\Order\Events\Created\MultiCreditNoteCreated;
use Plenty\Modules\Order\Events\Created\MultiOrderCreated;
use Plenty\Modules\Order\Events\Created\RepairCreated;
use Plenty\Modules\Order\Events\Created\ReturnCreated;
use Plenty\Modules\Order\Events\Created\SalesOrderCreated;
use Plenty\Modules\Order\Events\Created\WarrantyCreated;
use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Order\Models\OrderType;

/**
 * This class is used as an event listener as well as a service for registering events. The class allows to register event classes to extend the OrderCreated event for custom order types.
 */
class OrderCreatedTypeService 
{

	/**
	 * Reacts upon the OrderCreated event
	 */
	public function handle(
		OrderCreated $created
	)
	{
		//proxy method
	}

	/**
	 * Create event class for a custom order type
	 */
	public static function addEventForType(
		int $typeId, 
		string $className
	)
	{
		//proxy method
	}

	/**
	 * Delete event class from a custom order type
	 */
	public static function removeEventForType(
		int $typeId, 
		string $className
	)
	{
		//proxy method
	}

}