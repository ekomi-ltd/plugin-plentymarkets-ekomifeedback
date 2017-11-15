<?php
namespace Plenty\Modules\Listing\ShippingProfile\Models;


/**
 * The listing shipping profile model.
 */
abstract class ShippingProfile 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$credentialsId;
	public		$referrerId;
	public		$createdBy;
	public		$isDefault;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}