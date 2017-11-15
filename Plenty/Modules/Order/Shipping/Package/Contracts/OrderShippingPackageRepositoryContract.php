<?php
namespace Plenty\Modules\Order\Shipping\Package\Contracts;

use Plenty\Modules\Order\Shipping\Package\Models\OrderShippingPackage;

/**
 * Create, get, update and delete order shipping packages.
 */
interface OrderShippingPackageRepositoryContract 
{

	/**
	 * Get an order shipping package
	 */
	public function getOrderShippingPackage(
		int $orderShippingPackageId, 
		array $columns = []
	):OrderShippingPackage;

	/**
	 * List order shipping packages
	 */
	public function listOrderShippingPackages(
		int $orderId, 
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * Create an order shipping package
	 */
	public function createOrderShippingPackage(
		int $orderId, 
		array $data
	):OrderShippingPackage;

	/**
	 * Update an order shipping package
	 */
	public function updateOrderShippingPackage(
		int $orderShippingPackageId, 
		array $data
	):OrderShippingPackage;

	/**
	 * Delete an order shipping package
	 */
	public function deleteOrderShippingPackage(
		int $orderShippingPackageId
	);

}