<?php
namespace Plenty\Modules\Market\Ebay\Category\Models;


/**
 * The category model
 */
abstract class Category 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$parentId;
	public		$name;
	public		$isLeaf;
	public		$children;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}