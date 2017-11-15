<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The current authorized user
 */
abstract class AuthorizedUser 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$realName;
	public		$lang;
	public		$isSupportUser;
	public		$user;
	public		$oauthAccessTokensId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}