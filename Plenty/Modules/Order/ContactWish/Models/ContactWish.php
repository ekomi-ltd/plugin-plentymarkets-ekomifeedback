<?php
namespace Plenty\Modules\Order\ContactWish\Models;


/**
 * The contact wish model.
 */
abstract class ContactWish 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$text;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}