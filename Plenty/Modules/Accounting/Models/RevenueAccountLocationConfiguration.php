<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The revenue account location configuration model. A revenue account location configuration is the set of all revenue accounts that belong to one accounting location.
 */
abstract class RevenueAccountLocationConfiguration 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$locationId;
	public		$accountEu;
	public		$accountExport;
	public		$revenueAccountCountryConfigurations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}