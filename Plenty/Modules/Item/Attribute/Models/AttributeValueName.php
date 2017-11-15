<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueName model including AttributeValue
 */
abstract class AttributeValueName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$valueId;
	public		$lang;
	public		$name;
	public		$attributeValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}