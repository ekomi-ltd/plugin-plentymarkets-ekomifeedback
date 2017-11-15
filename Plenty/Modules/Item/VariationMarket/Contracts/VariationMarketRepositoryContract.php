<?php
namespace Plenty\Modules\Item\VariationMarket\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationMarket\Models\VariationMarket;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation market repository
 */
interface VariationMarketRepositoryContract 
{

	/**
	 * Gets the data of a market linked to a variation. The ID of the market and the ID of the variation must be specified.
	 */
	public function findOne(
		int $variationId, 
		float $marketplaceId
	):VariationMarket;

	/**
	 * Creates a link between a market and a variation and adds market data.
	 */
	public function create(
		array $data
	):VariationMarket;

	/**
	 * Deletes the link between a market and a variation. The ID of the market and the ID of the variation must be specified.
	 */
	public function delete(
		int $marketplaceId, 
		float $variationId
	):DeleteResponse;

	/**
	 * Lists the markets linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationMarket;

	/**
	 * Lists the markets linked to a variation with inheritance details. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationMarket;

}