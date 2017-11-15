<?php
namespace Plenty\Log\Services;

use Plenty\Log\Exceptions\ReferenceTypeException;

/**
 * Register log reference types.
 */
abstract class ReferenceContainer 
{

	/**
	 * Use this method to add reference types.
	 */
	abstract public function add(
		array $referenceTypes
	);

}