<?php
namespace Plenty\Modules\Order\Shipping\Information\Contracts;

use Plenty\Modules\Order\Shipping\Information\Models\ShippingInformation;

/**
 * The ShippingInformationRepositoryContract is the interface for the shipping information repository. This interface allows to get shipping information by order ID, create new shipping information or update shipping information.
 */
interface ShippingInformationRepositoryContract 
{

	/**
	 * Get Shipping Information by an order ID
	 */
	public function getShippingInformationByOrderId(
		int $orderId
	):ShippingInformation;

	/**
	 * Delete Shipping Information by an order ID
	 */
	public function resetShippingInformation(
		int $orderId
	);

	/**
	 * Create Shipping Information
	 */
	public function saveShippingInformation(
		array $data
	):ShippingInformation;

	/**
	 * Update Additional Data of Shipping Information by Order ID
	 */
	public function updateAdditionalData(
		array $data, 
		int $orderId
	):ShippingInformation;

	/**
	 * Update Shipping Status of Shipping Information by Order ID
	 */
	public function updateShippingStatus(
		array $data, 
		int $orderId
	):ShippingInformation;

}