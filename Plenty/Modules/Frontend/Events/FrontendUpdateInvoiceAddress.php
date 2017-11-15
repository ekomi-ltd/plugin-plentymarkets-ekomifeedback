<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the invoice address is changed in the online store.
 */
abstract class FrontendUpdateInvoiceAddress 
{

	/**
	 * Gets the ID of the address saved for the account.
	 */
	abstract public function getAccountAddressId(
	):int;

}