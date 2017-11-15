<?php
namespace Plenty\Validation\Service;

use Plenty\Validation\Contracts\Attribute;

/**
 * Instantiates Attribute Classes
 */
abstract class AttributeFactory 
{

	abstract public function create(
		string $which
	):Attribute;

}