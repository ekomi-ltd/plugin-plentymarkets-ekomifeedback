<?php
namespace Plenty\Modules\DataExchange\Resource\Factories;

use Plenty\Modules\DataExchange\Resource\Contracts\ResourceLoaderContract;

abstract class ResourceLoaderFactory 
{

	abstract public function getResourceLoaderByType(
		string $type
	):ResourceLoaderContract;

	abstract public function addLoader(
		ResourceLoaderContract $loader
	);

}