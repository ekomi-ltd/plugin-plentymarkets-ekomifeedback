<?php
namespace Plenty\Modules\Order\Date\Models;


/**
 * The OrderDateTypeName model. Order date types can have several names. One name per language. Each name has a unique ID.
 */
abstract class OrderDateTypeName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}