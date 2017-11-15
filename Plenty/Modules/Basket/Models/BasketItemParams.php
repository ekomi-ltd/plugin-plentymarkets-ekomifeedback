<?php
namespace Plenty\Modules\Basket\Models;


/**
 * The basket item params model
 */
abstract class BasketItemParams 
{

	const TABLE_NAME = 'plenty_basket_article_params';

	const ORDER_PROPERTY_TYPE_TEXT = 'text';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$type;
	public		$name;
	public		$value;
	public		$basketItemId;
	public		$propertyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}