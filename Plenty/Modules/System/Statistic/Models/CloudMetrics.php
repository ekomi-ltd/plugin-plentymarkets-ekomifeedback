<?php
namespace Plenty\Modules\System\Statistic\Models;


/**
 * Represent cloud metrics for a specific day
 */
abstract class CloudMetrics 
{
	public		$plentyId;
	public		$date;
	public		$webspaceMB;
	public		$webspaceDocumentsMB;
	public		$cloudSpaceDocumentsMB;
	public		$cloudSpaceItemsMB;
	public		$dbSpaceMb;
	public		$userAccounts;
	public		$warehouses;
	public		$facetSearchItems;
	public		$facetSearchCalls;
	public		$items;
	public		$itemVariations;
	public		$hbciDailyAccounts;
	public		$hbciHourlyAccounts;
	public		$ebicsDailyAccounts;
	public		$ebicsHourlyAccounts;
	public		$emailAccountsWithTicketGeneration;
	public		$ebayAccountsWithTicketGeneration;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}