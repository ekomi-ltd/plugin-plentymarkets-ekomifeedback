<?php
namespace Plenty\Modules\DataExchange\Resource\Models;


/**
 * ResourceBag
 */
abstract class ResourceBag 
{

	abstract public function getResource(
	);

	abstract public function getMd5(
	);

}