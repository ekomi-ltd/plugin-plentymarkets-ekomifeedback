<?php
namespace Plenty\Modules\Market\Settings\Models;


/**
 * The market settings model.
 */
abstract class Settings 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$marketplaceId;
	public		$type;
	public		$settings;
	public		$category;
	public		$parcelServicePreset;
	public		$attribute;
	public		$property;
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