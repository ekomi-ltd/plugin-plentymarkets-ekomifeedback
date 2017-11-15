<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Plenty\Modules\Item\SalesPrice\Models\SalesPriceSearchRequest;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceSearchResponse;

/**
 * The contract for the sales price search repository
 */
interface SalesPriceSearchRepositoryContract 
{

	public function search(
		SalesPriceSearchRequest $request
	):SalesPriceSearchResponse;

	public function searchAll(
		SalesPriceSearchRequest $request
	):array;

}