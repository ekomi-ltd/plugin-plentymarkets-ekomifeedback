<?php
namespace Plenty\Modules\Category\Models;


/**
 * The CategoryBranchMarketplace model
 */
abstract class CategoryBranchMarketplace 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	public		$plenty_category_branch_marketplace_branch_id;
	public		$plenty_category_branch_marketplace_webstore_id;
	public		$plenty_category_branch_marketplace_marketplace_id;
	public		$plenty_category_branch_marketplace_marketplace_sub_id;
	public		$plenty_category_branch_marketplace_delimiter;
	public		$plenty_category_branch_marketplace_value1;
	public		$plenty_category_branch_marketplace_value2;
	public		$plenty_category_branch_marketplace_last_update;
	public		$branch;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}