<?php
namespace Plenty\Modules\Authentication\Models;


/**
 * The user authentication model
 */
abstract class User 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$pwd;
	public		$pwd_md5;
	public		$timezone;
	public		$password;
	public		$user;
	public		$roles;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}