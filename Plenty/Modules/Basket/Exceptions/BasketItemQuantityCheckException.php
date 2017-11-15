<?php
namespace Plenty\Modules\Basket\Exceptions;


/**
 * Created by ptopczewski, 17.05.16 09:37
Class BasketItemQuantityCheckException
 */
abstract class BasketItemQuantityCheckException extends BasketItemCheckException 

{

	/**
	 * minimum quantity not reached
	 */
	const DID_NOT_REACH_MINIMUM_QUANTITY_FOR_ITEM = 1;

	/**
	 * maximum quantity reached
	 */
	const DID_REACH_MAXIMUM_QUANTITY_FOR_ITEM = 2;

	/**
	 * minimum quantity not reached
	 */
	const VARIATION_NOT_FOUND = 1;

	/**
	 * maximum quantity reached
	 */
	const NOT_ENOUGH_STOCK_FOR_ITEM = 2;

}