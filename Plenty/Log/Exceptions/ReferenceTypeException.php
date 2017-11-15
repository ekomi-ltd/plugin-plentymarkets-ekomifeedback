<?php
namespace Plenty\Log\Exceptions;


/**
 * Class ReferenceTypeException
 */
abstract class ReferenceTypeException extends \Exception 

{

	/**
	 * reference type is already registered.
	 */
	const REFERENCE_TYPE_ALREADY_EXISTS = 1;

}