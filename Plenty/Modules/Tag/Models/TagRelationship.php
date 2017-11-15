<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The tag relationship model.
 */
abstract class TagRelationship 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$tagId;
	public		$tagType;
	public		$relationshipValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}