<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling;

/**
 * Repository for item cross-selling
 */
interface ItemCrossSellingRepositoryContract 
{

	public function create(
		array $data
	):ItemCrossSelling;

	public function show(
		int $itemId
	):ItemCrossSelling;

	public function delete(
		int $itemId, 
		int $crossItemId
	):bool;

	public function findByItemId(
		int $itemId
	):array;

}