<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the shipping method is updated in the online store.
 */
abstract class FrontendUpdateShippingSettings 
{

	/**
	 * Gets the shipping costs.
	 */
	abstract public function getShippingCosts(
	):float;

	/**
	 * Gets the ID of the shipping service provider.
	 */
	abstract public function getParcelServiceId(
	):int;

	/**
	 * Gets the preset ID of the shipping service provider.
	 */
	abstract public function getParcelServicePresetId(
	):int;

}