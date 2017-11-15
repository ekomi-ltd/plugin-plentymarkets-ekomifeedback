<?php
namespace Plenty\Modules\Frontend\Models;


/**
 * frontend total vat model
 */
abstract class TotalVat 
{
	public		$vatId;
	public		$vatAmount;
	public		$vatValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}