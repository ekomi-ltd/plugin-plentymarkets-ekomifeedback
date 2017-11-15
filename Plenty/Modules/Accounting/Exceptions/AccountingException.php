<?php
namespace Plenty\Modules\Accounting\Exceptions;


/**
 * Class AccountingException
 */
abstract class AccountingException extends \Exception 

{

	/**
	 * The ID of the location could not be detected!
	 */
	const ERR_NO_LOCATION_ID_DETECTED = 1;

	/**
	 * The location could not be found!
	 */
	const ERR_LOCATION_NOT_FOUND = 2;

}