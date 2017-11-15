<?php
namespace Plenty\Modules\Order\Pdf\Events;

use Plenty\Modules\Document\Models\Document;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Pdf\Models\OrderPdfGeneration;

/**
 * OrderPdfGenerationEvent
 */
abstract class OrderPdfGenerationEvent 
{

	/**
	 * Get the
	 */
	abstract public function getOrder(
	):Order;

	/**
	 * Get the
	 */
	abstract public function getDocType(
	):string;

	abstract public function addOrderPdfGeneration(
		OrderPdfGeneration $orderPdfGeneration
	):self;

}