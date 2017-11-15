<?php
namespace Plenty\Modules\Tag\Models;


/**
 * The Tag model.
 */
abstract class Tag 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$tagName;
	public		$availabilities;
	public		$names;
	public		$relationships;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}