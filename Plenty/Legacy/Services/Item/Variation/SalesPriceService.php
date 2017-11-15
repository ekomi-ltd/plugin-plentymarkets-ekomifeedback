<?php
namespace Plenty\Legacy\Services\Item\Variation;


/**
 * To be written...
 */
abstract class SalesPriceService 
{

	abstract public function getUnitPrice(
		float $lot, 
		float $price, 
		string $unit
	):array;

}