<?php
namespace Plenty\Validation\Service;

use Plenty\Validation\Validator;

/**
 * Instantiates Validator Classes
 */
abstract class ValidatorFactory 
{

	abstract public function create(
		string $validatorClass
	):Validator;

}