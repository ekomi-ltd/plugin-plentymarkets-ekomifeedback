<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;


/**
 * The fitment model. This can contain multiple FitmentItems models.
 */
abstract class Fitment 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$marketId;
	public		$name;
	public		$categoryId;
	public		$items;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}