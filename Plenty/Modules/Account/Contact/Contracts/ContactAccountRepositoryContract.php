<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Account\Models\Account;

/**
 * The ContactAccountRepositoryContract is the interface for the contact account repository. This interface allows to get, create, update and delete accounts. An account contains company-related data.
 */
interface ContactAccountRepositoryContract 
{

	/**
	 * Returns an account by an ID only if it is associated with the given contact ID.
	 */
	public function findAccount(
		int $accountId, 
		int $contactId
	):Account;

	/**
	 * Creates an account and associates it immediately with the given ID of the contact.
	 */
	public function createAccount(
		array $data, 
		int $contactId
	):Account;

	/**
	 * Updates an account. If not already associated, it will associate the account with the given contact ID.
	 */
	public function updateAccount(
		array $data, 
		int $accountId, 
		int $contactId
	):Account;

	/**
	 * Deletes the given account of the given contact ID. Returns `true` if the deletion was successful. Returns `false` if the deletion was not successful.
	 */
	public function deleteAccount(
		int $accountId, 
		int $contactId
	):bool;

}