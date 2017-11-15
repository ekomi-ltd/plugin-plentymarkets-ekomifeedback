<?php
namespace Plenty\Modules\Order\Shipping\ParcelServiceRegion\Contracts;

use Plenty\Modules\Order\Shipping\ParcelServiceRegion\Models\ParcelServiceRegion;

/**
 * Get parcel service region
 */
interface ParcelServiceRegionRepositoryContract 
{

	/**
	 * Get a parcel service region
	 */
	public function getParcelServiceRegion(
		int $parcelServiceRegionId, 
		array $columns = []
	):ParcelServiceRegion;

	/**
	 * Lists parcel service regions by parcel service preset id.
	 */
	public function listParcelServiceRegions(
		int $parcelServicePresetId, 
		array $columns = []
	):array;

}