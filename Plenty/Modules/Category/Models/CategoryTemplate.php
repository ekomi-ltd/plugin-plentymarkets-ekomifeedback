<?php
namespace Plenty\Modules\Category\Models;


/**
 * Category Template
 */
abstract class CategoryTemplate 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	public		$categoryId;
	public		$plentyId;
	public		$lang;
	public		$content;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}