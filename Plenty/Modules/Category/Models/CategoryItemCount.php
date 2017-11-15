<?php
namespace Plenty\Modules\Category\Models;


/**
 * CategoryItemCount
 */
abstract class CategoryItemCount 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	public		$categoryId;
	public		$webstoreId;
	public		$count;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}