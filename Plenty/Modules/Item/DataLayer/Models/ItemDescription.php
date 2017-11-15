<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * ItemDescription
 */
abstract class ItemDescription 
{
	public		$itemId;
	public		$characterCache;
	public		$characterCacheXml;
	public		$characterUpdate;
	public		$description;
	public		$id;
	public		$keywords;
	public		$lang;
	public		$metaDescription;
	public		$name1;
	public		$name2;
	public		$name3;
	public		$shortDescription;
	public		$technicalData;
	public		$urlContent;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}