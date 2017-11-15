<?php
namespace Plenty\Modules\Item\Stock\Events;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered to warn about an overselling.
 */
abstract class BasketItemWarnOversell 
{

	abstract public function getBasketItem(
	):BasketItem;

	abstract public function getQuantity(
	):int;

}