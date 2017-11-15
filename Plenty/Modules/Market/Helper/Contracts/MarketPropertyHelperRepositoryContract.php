<?php
namespace Plenty\Modules\Market\Helper\Contracts;


/**
 * The contract for the market property helper repository.
 */
interface MarketPropertyHelperRepositoryContract 
{

	/**
	 * Returns a list of the market properties
	 */
	public function getMarketProperty(
		float $referrerId
	):array;

}