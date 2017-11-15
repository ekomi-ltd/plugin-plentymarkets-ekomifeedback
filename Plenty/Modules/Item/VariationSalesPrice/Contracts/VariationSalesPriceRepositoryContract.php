<?php
namespace Plenty\Modules\Item\VariationSalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationSalesPrice\Models\VariationSalesPrice;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation sales price repository
 */
interface VariationSalesPriceRepositoryContract 
{

	/**
	 * Gets the price data of a sales price linked to a variation. The ID of the sales price and the ID of the variation must be specified.
	 */
	public function show(
		int $salesPriceId, 
		int $variationId
	):VariationSalesPrice;

	/**
	 * Creates a link between a sales price and a variation and adds sales price data.
	 */
	public function create(
		array $data
	):VariationSalesPrice;

	/**
	 * Updates the data of a sales price linked to a variation.
	 */
	public function update(
		array $data, 
		int $salesPriceId, 
		int $variationId
	):VariationSalesPrice;

	/**
	 * Deletes a link between a sales price and a variation. The ID of the sales price and the ID of the variation must be specified. An exception is thrown if at least one relation exists.
	 */
	public function delete(
		int $salesPriceId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists the data of the sales prices linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationSalesPrice;

	/**
	 * Lists the data of the sales prices linked to a variation with inheritance details. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationSalesPrice;

}