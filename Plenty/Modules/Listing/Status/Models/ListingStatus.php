<?php
namespace Plenty\Modules\Listing\Status\Models;


/**
 * The listing status model.
 */
abstract class ListingStatus 
{

	const STATUS_ACTIVE = 1;

	const STATUS_ENDED = 2;

	const STATUS_RELISTED = 3;

	const STATUS_HIDDEN = 4;

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