<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The authentication Permission (REST) model
 */
abstract class Permission 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$permissionKey;
	public		$roles;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}