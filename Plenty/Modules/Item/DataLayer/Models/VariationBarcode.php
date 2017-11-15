<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationBarcode
 */
abstract class VariationBarcode 
{
	public		$code;
	public		$createdTimestamp;
	public		$barcodeId;
	public		$barcodeType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}