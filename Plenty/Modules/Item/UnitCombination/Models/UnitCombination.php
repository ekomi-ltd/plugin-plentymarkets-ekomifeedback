<?php
namespace Plenty\Modules\Item\UnitCombination\Models;


/**
 * The unitCombination model
 */
abstract class UnitCombination 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$unitId;
	public		$content;
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