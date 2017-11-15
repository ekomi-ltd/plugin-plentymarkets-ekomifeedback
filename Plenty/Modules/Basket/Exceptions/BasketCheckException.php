<?php
namespace Plenty\Modules\Basket\Exceptions;

use Plenty\Plugin\Error\HTTPException;

/**
 * Class BasketCheckException
 */
abstract class BasketCheckException extends HTTPException 

{

	/**
	 * An error occurred during the calculation of the delivery costs.
	 */
	const SHIPPING_COSTS_CALCUALATION_FAILED = 53;

}