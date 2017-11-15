<?php
namespace Plenty\Modules\Category\Contracts;

use Plenty\Modules\Category\Models\CategoryBranchMarketplace;

/**
 * Repository for CategoryBranchMarketplace
 */
interface CategoryBranchMarketplaceRepositoryContract 
{

	public function findCategoryBranchMarketplace(
		int $branchId, 
		int $webstoreId, 
		int $marketplaceId, 
		float $marketplaceSubId = 0.0
	):CategoryBranchMarketplace;

}