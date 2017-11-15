<?php
namespace Plenty\Modules\Category\Models;


/**
 * Category
 */
abstract class Category 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'plenty_category_last_update_timestamp';

	const CREATED_AT = 'createdAt';
	public		$id;
	public		$parentCategoryId;
	public		$level;
	public		$type;
	public		$linklist;
	public		$right;
	public		$sitemap;
	public		$clients;
	public		$details;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}