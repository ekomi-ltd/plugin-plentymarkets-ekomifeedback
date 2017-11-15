<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order type name model.
 */
abstract class OrderTypeName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$name;
	public		$lang;
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