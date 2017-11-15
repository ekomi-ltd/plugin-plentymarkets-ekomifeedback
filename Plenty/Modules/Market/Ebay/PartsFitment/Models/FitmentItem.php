<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;


/**
 * The fitment item model. This belongs to one fitment model and can contain multiple FitmentItemProperty models.
 */
abstract class FitmentItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$fitmentId;
	public		$fitment;
	public		$properties;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}