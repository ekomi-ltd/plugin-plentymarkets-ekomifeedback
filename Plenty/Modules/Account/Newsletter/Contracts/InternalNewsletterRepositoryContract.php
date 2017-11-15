<?php
namespace Plenty\Modules\Account\Newsletter\Contracts;

use Plenty\Modules\Account\Newsletter\Exceptions\NewsletterException;
use Plenty\Modules\Account\Newsletter\Models\Entry;
use Plenty\Modules\Account\Newsletter\Models\Folder;
use Plenty\Modules\Account\Newsletter\Models\Recipient;

/**
 * The NewsletterRepositoryContract is the interface for the newsletter repository. This interface allows to assign email addresses of recipients to email folders. Depending on the settings selected for each email folder, different newsletters can be sent to different target groups.
 */
interface InternalNewsletterRepositoryContract 
{

	/**
	 * Creates an entry.
	 */
	public function createEntry(
		array $data = []
	):Entry;

	/**
	 * Creates a recipient for an existing folder.
	 */
	public function createRecipient(
		array $data = []
	):array;

	/**
	 * Creates a folder.
	 */
	public function createFolder(
		array $data = []
	):Folder;

	/**
	 * Delete all entries
	 */
	public function deleteAllEntries(
	):array;

	/**
	 * Delete all folders
	 */
	public function deleteAllFolders(
	):array;

	/**
	 * Delete all recipients
	 */
	public function deleteAllRecipients(
	):array;

	/**
	 * Deletes an entry. The ID of the entry must be specified.
	 */
	public function deleteEntryById(
		int $entryId
	):Entry;

	/**
	 * Deletes a folder. The ID of the folder must be specified.
	 */
	public function deleteFolderById(
		int $folderId
	):Folder;

	/**
	 * Deletes a recipient. The ID of the recipient must be specified.
	 */
	public function deleteRecipientById(
		int $recipientId
	):Recipient;

	/**
	 * Lists all newsletter entries
	 */
	public function listAllEntries(
	):array;

	/**
	 * Lists all newsletter folders
	 */
	public function listAllFolders(
	):array;

	/**
	 * Lists all recipients
	 */
	public function listAllRecipients(
		array $data = []
	):array;

	/**
	 * Shows details from entry
	 */
	public function listEntryById(
		int $entryId
	):Entry;

	/**
	 * Shows details from folder
	 */
	public function listFolderById(
		int $folderId
	):Folder;

	/**
	 * Shows details from recipient
	 */
	public function listRecipientById(
		int $recipientId
	):Recipient;

	/**
	 * Updates an entry. The ID of the entry must be specified.
	 */
	public function updateEntryById(
		int $entryId, 
		array $data = []
	):Entry;

	/**
	 * Updates a folder. The ID of the folder must be specified.
	 */
	public function updateFolderById(
		int $folderId, 
		array $data = []
	):Folder;

	/**
	 * Updates a recipient. The ID of the recipient must be specified.
	 */
	public function updateRecipientById(
		int $recipientId, 
		array $data = []
	):Recipient;

	/**
	 * Adds the email address of a contact or an interested party to an email folder for the newsletter list.
	 */
	public function addToNewsletterList(
		string $email, 
		string $forename = "", 
		string $surname = "", 
		array $emailDirIds = []
	);

}