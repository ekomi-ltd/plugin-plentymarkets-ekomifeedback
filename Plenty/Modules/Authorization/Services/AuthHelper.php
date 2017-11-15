<?php
namespace Plenty\Modules\Authorization\Services;


/**
 * Service to process unguarded php code
 */
abstract class AuthHelper 
{

	abstract public function processUnguarded(
		callable $callable
	);

}