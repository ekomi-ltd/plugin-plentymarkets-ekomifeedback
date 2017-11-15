<?php
namespace Plenty\Modules\Frontend\Services;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * Frontend-service for customer information
 */
abstract class AccountService 
{

	abstract public function getIsAccountLoggedIn(
	):bool;

	abstract public function getAccountContactId(
	):int;

}