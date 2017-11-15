<?php
namespace Plenty\Modules\Listing\StockDependenceType\Models;


/**
 * The listing stock dependence type name model.
 */
abstract class StockDependenceTypeName 
{
	public		$id;
	public		$typeId;
	public		$name;
	public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}