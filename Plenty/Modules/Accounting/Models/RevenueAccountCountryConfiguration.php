<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The revenue account country configuration model. The revenue account country configuration is a set of up to 4 revenue accounts for one country. Each country that you need to pay VAT in needs a configuration. The 4 revenue account included in the configuration are associated with VAT rates. The VAT rate that one revenue account is associated with can be identified by the ID of the VAT rate. The ID of the VAT rate is included in the account name. Furthermore, each revenue account country configuration is part of a revenue account location configuration. A revenue account country configuration is only available if a VAT configuration for the country exists.
 */
abstract class RevenueAccountCountryConfiguration 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$countryId;
	public		$revenueAccountLocationId;
	public		$revenueAccounts;
	public		$country;
	public		$locationConfiguration;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}