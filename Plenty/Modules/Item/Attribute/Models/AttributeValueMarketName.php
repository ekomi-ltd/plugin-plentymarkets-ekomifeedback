<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueMarketName model including AttributeValue
 */
abstract class AttributeValueMarketName 
{

	const REFERENCE_TYPE_AMAZON = 'amazon';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$valueId;
	public		$lang;
	public		$name;
	public		$attributeId;
	public		$referenceType;
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