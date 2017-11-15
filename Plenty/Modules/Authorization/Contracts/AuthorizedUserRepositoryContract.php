<?php
namespace Plenty\Modules\Authorization\Contracts;

use Plenty\Modules\Authorization\Models\AuthorizedUser;

/**
 * service to get current authorized user
 */
interface AuthorizedUserRepositoryContract 
{

	public function getCurrentAuthorizedUser(
	):AuthorizedUser;

}