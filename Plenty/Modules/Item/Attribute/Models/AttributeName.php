<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeName model including Attribute
 */
abstract class AttributeName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$attributeId;
	public		$lang;
	public		$name;
	public		$attribute;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}