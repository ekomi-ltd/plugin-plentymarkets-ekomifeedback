<?php
namespace Plenty\Modules\Item\DataLayer\Services;


/**
 * ItemDataLayer Lookup
 */
abstract class ItemDataLayerResultLookup 
{

	abstract public function getNumberOfRows(
	):int;

	abstract public function getResult(
	):array;

}