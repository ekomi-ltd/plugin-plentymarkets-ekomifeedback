<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;


/**
 * The fitment item property model. This bleongs to an FitmentItem model.
 */
abstract class FitmentItemProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$fitmentItemId;
	public		$name;
	public		$value;
	public		$fitmentItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}