<?php
namespace Plenty\Modules\Account\Newsletter\Models;


/**
 * The newsletter entry model.
 */
abstract class Entry 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$subject;
	public		$body;
	public		$kind;
	public		$log;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}