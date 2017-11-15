<?php
namespace Plenty\Modules\Listing\StockDependenceType\Models;


/**
 * The listing stock dependence type model.
 */
abstract class StockDependenceType 
{

	const UNLIMITED_WITH_SYNC = 1;

	const LIMITED_WITH_RESERVATION = 2;

	const LIMITED_WITHOUT_RESERVATION = 3;

	const UNLIMITED_WITHOUT_SYNC = 4;

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}