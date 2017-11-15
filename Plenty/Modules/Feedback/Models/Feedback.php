<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback model.
 */
abstract class Feedback 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const RATEABLE_TARGET_TYPES = 'Array';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$title;
	public		$authorName;
	public		$isVisible;
	public		$createdAt;
	public		$updatedAt;
	public		$sourceRelation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}