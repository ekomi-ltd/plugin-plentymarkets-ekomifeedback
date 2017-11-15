<?php
namespace Plenty\Modules\Account\Newsletter\Models;


/**
 * The newsletter recipient
 */
abstract class Recipient 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$folderId;
	public		$contactId;
	public		$firstName;
	public		$lastName;
	public		$email;
	public		$gender;
	public		$birthday;
	public		$timestamp;
	public		$templateLang;
	public		$confirmedTimestamp;
	public		$confirmAuthString;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}