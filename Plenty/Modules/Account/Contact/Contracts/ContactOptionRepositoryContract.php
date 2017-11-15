<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Contact\Models\ContactOption;

/**
 * The ContactOptionRepositoryContract is the interface for the contact option repository. This interface allows to get, create, update and delete contact options.
 */
interface ContactOptionRepositoryContract 
{

	/**
	 * Lists options of the contact. The ID of the contact must be specified. The ID of the option type and the ID of the option sub-type can be optionally used.
	 */
	public function findContactOptions(
		int $contactId, 
		int $typeId = 0, 
		int $subTypeId = 0
	):Collection;

	/**
	 * Creates an option for the given contact and returns them.
	 */
	public function createContactOptions(
		array $optionData, 
		int $contactId
	):array;

	/**
	 * Updates options of the given contact and returns them. The ID of the contact must be specified.
	 */
	public function updateContactOptions(
		array $optionData, 
		int $contactId
	):array;

	/**
	 * Deletes all options of the given contact. The ID of the contact must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful.
	 */
	public function deleteContactOptionsByContactId(
		int $contactId
	):bool;

	/**
	 * Gets a contact option. The ID of the option must be specified.
	 */
	public function findContactOption(
		int $optionId
	):ContactOption;

	/**
	 * Updates an option with the given id and returns it.
	 */
	public function updateContactOption(
		array $optionData, 
		int $optionId
	):ContactOption;

	/**
	 * Deletes a contact option. The ID of the option must be specified.
	 */
	public function deleteContactOption(
		int $optionId
	):bool;

}