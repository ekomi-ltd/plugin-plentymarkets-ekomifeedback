<?php
namespace Plenty\Modules\Item\Unit\Models;


/**
 * The unit name model including the unit
 */
abstract class UnitName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$unitId;
	public		$lang;
	public		$name;
	public		$unit;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}