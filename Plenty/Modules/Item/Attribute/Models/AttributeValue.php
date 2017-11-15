<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValue model including Attribute and AttributeValueName
 */
abstract class AttributeValue 
{

	const UPDATED_AT = 'plenty_attribute_value_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';
	public		$id;
	public		$attributeId;
	public		$backendName;
	public		$position;
	public		$image;
	public		$comment;
	public		$amazonValue;
	public		$ottoValue;
	public		$neckermannAtEpValue;
	public		$laRedouteValue;
	public		$tracdelightValue;
	public		$percentageDistribution;
	public		$attribute;
	public		$valueNames;
	public		$valueMarketNames;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}