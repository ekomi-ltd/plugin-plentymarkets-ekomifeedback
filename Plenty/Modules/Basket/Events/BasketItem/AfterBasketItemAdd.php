<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered after an item is added to the shopping cart.
 */
abstract class AfterBasketItemAdd 
{

	abstract public function getBasketItem(
	):BasketItem;

}