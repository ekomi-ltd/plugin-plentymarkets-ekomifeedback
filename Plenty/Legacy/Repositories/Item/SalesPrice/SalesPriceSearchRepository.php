<?php
namespace Plenty\Legacy\Repositories\Item\SalesPrice;

use Plenty\Modules\Item\SalesPrice\Contracts\SalesPriceSearchRepositoryContract;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceSearchRequest;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceSearchResponse;

/**
 * foo
 */
abstract class SalesPriceSearchRepository 
{

	abstract public function search(
		SalesPriceSearchRequest $request
	):SalesPriceSearchResponse;

	abstract public function searchAll(
		SalesPriceSearchRequest $request
	):array;

}