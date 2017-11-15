<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;


/**
 * The ShippingServiceProviderPluginRepositoryContract is the interface for the shipping service provider plugin repository. This interface allows to list shipping service provider plugins.
 */
interface ShippingServiceProviderPluginRepositoryContract 
{

	public function plugins(
	);

}