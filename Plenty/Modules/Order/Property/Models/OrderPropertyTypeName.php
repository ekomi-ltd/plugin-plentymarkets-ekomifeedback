<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The order property type name model. Each order property type can have one name per language.
 */
abstract class OrderPropertyTypeName 
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