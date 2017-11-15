<?php
namespace Plenty\Modules\Listing\Models;


/**
 * The listing model.
 */
abstract class Listing 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$itemId;
	public		$typeId;
	public		$stockDependenceTypeId;
	public		$unitCombinationId;
	public		$properties;
	public		$type;
	public		$stockDependenceType;
	public		$markets;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}