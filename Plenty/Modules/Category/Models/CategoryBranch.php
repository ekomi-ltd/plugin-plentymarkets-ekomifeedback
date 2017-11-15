<?php
namespace Plenty\Modules\Category\Models;


/**
 * Category Branch
 */
abstract class CategoryBranch 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$categoryId;
	public		$category1Id;
	public		$category2Id;
	public		$category3Id;
	public		$category4Id;
	public		$category5Id;
	public		$category6Id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}