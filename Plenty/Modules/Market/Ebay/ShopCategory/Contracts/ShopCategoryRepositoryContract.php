<?php
namespace Plenty\Modules\Market\Ebay\ShopCategory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * The contract for the eBay shop categories.
 */
interface ShopCategoryRepositoryContract 
{

	/**
	 * Returns a fitment by an ID.
	 */
	public function all(
		int $credentialsId, 
		string $viewType = "list"
	):array;

}