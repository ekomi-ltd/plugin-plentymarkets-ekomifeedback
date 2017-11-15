<?php
namespace Plenty\Modules\Basket\Events\Basket;

use Plenty\Modules\Basket\Models\Basket;

/**
 * The event is triggered after the shopping cart is created.
 */
abstract class AfterBasketCreate 
{

	abstract public function getBasket(
	):Basket;

}