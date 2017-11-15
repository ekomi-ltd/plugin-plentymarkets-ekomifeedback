<?php
namespace Plenty\Modules\Item\Item\Models;


/**
 * The item text model
 */
abstract class ItemText 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$lang;
	public		$name1;
	public		$name2;
	public		$name3;
	public		$shortDescription;
	public		$metaDescription;
	public		$description;
	public		$technicalData;
	public		$keywords;
	public		$urlPath;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}