<?php
namespace Plenty\Modules\Authentication\Events;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The event is triggered after a user is authenticated in the client (store).
 */
abstract class AfterAccountAuthentication 
{

	abstract public function isSuccessful(
	):bool;

	abstract public function getAccountContact(
	):Contact;

}