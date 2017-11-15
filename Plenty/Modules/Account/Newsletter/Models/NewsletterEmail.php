<?php
namespace Plenty\Modules\Account\Newsletter\Models;


/**
 * NewsletterEmail
 */
abstract class NewsletterEmail 
{

	const DEFAULT_ITEMS_PER_PAGE = 10;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$directory;
	public		$customerId;
	public		$forename;
	public		$surname;
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