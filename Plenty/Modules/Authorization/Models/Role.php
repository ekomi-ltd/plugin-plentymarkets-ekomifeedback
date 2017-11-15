<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The Role authentication model
 */
abstract class Role 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$holdParents;
	public		$hidden;
	public		$users;
	public		$permissions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}