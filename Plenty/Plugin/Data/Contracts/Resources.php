<?php
namespace Plenty\Plugin\Data\Contracts;

use Plenty\Plugin\Data\Model\ResourceInformation;

/**
 * Resource
 */
interface Resources 
{

	public function load(
		string $resourceName, 
		array $options = []
	):ResourceInformation;

	public function exists(
		string $resourceName
	):bool;

}