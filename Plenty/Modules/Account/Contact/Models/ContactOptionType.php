<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact options type model
 */
abstract class ContactOptionType 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}