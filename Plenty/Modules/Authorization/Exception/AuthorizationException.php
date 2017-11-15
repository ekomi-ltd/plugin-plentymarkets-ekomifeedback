<?php
namespace Plenty\Modules\Authorization\Exception;

use Exception;

/**
 * Class AuthorizationException
 */
abstract class AuthorizationException extends \Exception 

{

	/**
	 * name is missing
	 */
	const NAME_IS_MISSING = 1;

	const ID_IS_MISSING = 2;

	const NO_USER_IDS_GIVEN = 3;

	const ROLE_ID_FROM_SOURCE_IS_MISSING = 4;

	const ROLE_ID_FROM_TARGET_IS_MISSING = 5;

	const ROLE_NAME_FROM_TRAGET_IS_MISSING = 6;

	const ROLE_ID_NOT_EXIST = 7;

	const ROLE_COULD_NOT_BE_DELETED = 8;

	const ROLE_DOESNT_EXIST = 9;

}