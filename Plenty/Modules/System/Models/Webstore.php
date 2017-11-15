<?php
namespace Plenty\Modules\System\Models;


/**
 * The webstore model
 */
abstract class Webstore 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$type;
	public		$storeIdentifier;
	public		$configuration;
	public		$locations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}