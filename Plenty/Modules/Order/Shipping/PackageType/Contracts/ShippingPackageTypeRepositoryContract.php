<?php
namespace Plenty\Modules\Order\Shipping\PackageType\Contracts;

use Plenty\Modules\Order\Shipping\PackageType\Models\ShippingPackageType;

/**
 * The ShippingPackageTypeRepositoryContract is the interface for the shipping package type repository. This interface allows to list all shipping package types or to get a shipping package type by the ID.
 */
interface ShippingPackageTypeRepositoryContract 
{

	/**
	 * Gets a shipping package type. The ID of the shipping package type must be specified.
	 */
	public function findShippingPackageTypeById(
		int $shippingPackageTypeId
	):ShippingPackageType;

	/**
	 * Lists shipping packages types.
	 */
	public function listShippingPackageTypes(
	):array;

}