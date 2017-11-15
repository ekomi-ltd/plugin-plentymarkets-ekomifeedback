<?php
namespace Plenty\Modules\Market\Helper\Contracts;


/**
 * The contract for the market category helper repository.
 */
interface MarketCategoryHelperRepositoryContract 
{

	/**
	 * Returns the category bread crumbs as string for a given branchId, lang and plentyId
	 */
	public function getCategoryBranchName(
		int $branchId, 
		string $lang, 
		int $plentyId, 
		string $separator = ">"
	):string;

}