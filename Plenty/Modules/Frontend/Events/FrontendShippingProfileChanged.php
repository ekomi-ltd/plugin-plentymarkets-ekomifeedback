<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the shipping profile is changed in the online store.
 */
abstract class FrontendShippingProfileChanged 
{

	/**
	 * Gets the ID of the shipping profile.
	 */
	abstract public function getShippingProfileId(
	);

	/**
	 * Updates the ID of the shipping profile. The ID must be specified.
	 */
	abstract public function setShippingProfileId(
		 $shippingProfileId
	);

}