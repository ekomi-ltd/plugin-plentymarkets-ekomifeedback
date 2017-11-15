<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueSet model
 */
abstract class AttributeValueSet 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$attributeValueSetId;
	public		$attributeId;
	public		$valueId;
	public		$isLinkableToImage;
	public		$attributeValue;
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