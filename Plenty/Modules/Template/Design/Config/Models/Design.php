<?php
namespace Plenty\Modules\Template\Design\Config\Models;


/**
 * Design model
 */
abstract class Design 
{

	const CREATED_AT = 'inserted';

	const UPDATED_AT = 'last_update';
	public		$designName;
	public		$imageDir;
	public		$export;
	public		$updatedAt;
	public		$createdAt;
	public		$config;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}