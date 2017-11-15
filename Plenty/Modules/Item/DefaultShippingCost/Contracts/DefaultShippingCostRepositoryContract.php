<?php
namespace Plenty\Modules\Item\DefaultShippingCost\Contracts;


/**
 * The contract for the default shipping cost repository
 */
interface DefaultShippingCostRepositoryContract 
{

	public function findShippingCost(
		int $itemId, 
		float $referrerId, 
		int $shippingDestinationId, 
		int $paymentMethodId
	):float;

}