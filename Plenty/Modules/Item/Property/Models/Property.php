<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The property including Property name and property market reference
 */
abstract class Property 
{

	const UPDATED_AT = 'plenty_character_item_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';
	public		$id;
	public		$position;
	public		$propertyGroupId;
	public		$unit;
	public		$backendName;
	public		$comment;
	public		$valueType;
	public		$isSearchable;
	public		$isOderProperty;
	public		$isShownOnItemPage;
	public		$isShownOnItemList;
	public		$isShownAtCheckout;
	public		$isShownInPdf;
	public		$isShownAsAdditionalCosts;
	public		$surcharge;
	public		$updatedAt;
	public		$names;
	public		$marketComponents;
	public		$group;
	public		$selections;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}