<?php
namespace Plenty\Modules\Basket\Exceptions;

use Plenty\Plugin\Error\HTTPException;

/**
 * Created by ptopczewski, 12.05.16 09:03
Class BasketItemCheckException
 */
abstract class BasketItemCheckException extends HTTPException 

{

	/**
	 * variation not found
	 */
	const VARIATION_NOT_FOUND = 1;

	/**
	 * not enough stock for item
	 */
	const NOT_ENOUGH_STOCK_FOR_ITEM = 2;

}