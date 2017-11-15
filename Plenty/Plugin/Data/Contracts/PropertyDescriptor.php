<?php
namespace Plenty\Plugin\Data\Contracts;

use Plenty\Plugin\Data\Model\PropertyInformation;

/**
 * describes properties of a Model
 */
interface PropertyDescriptor 
{

	public function getPropertyInformation(
		string $modelClassName
	):array;

}