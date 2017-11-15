<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * The session storage model for forum data.
 */
abstract class Forum 
{
	public		$forumGroupId;
	public		$forumUsername;
	public		$forumConfig;
	public		$forumPermissions;
	public		$forumLastVisitTime;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}