<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * validation event
 */
abstract class ValidateCheckoutEvent 
{

	abstract public function getErrorKeysList(
	):array;

	abstract public function addErrorKey(
		string $errorKey
	):self;

}