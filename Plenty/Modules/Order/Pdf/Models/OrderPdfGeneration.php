<?php
namespace Plenty\Modules\Order\Pdf\Models;


/**
 * OrderPdfGeneration Model
 */
abstract class OrderPdfGeneration 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$language;
	public		$advice;
	public		$sums;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}