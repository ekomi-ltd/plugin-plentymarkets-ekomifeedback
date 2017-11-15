<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag availability model.
 */
abstract class TagAvailability 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$tagId;
	public		$tagType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}