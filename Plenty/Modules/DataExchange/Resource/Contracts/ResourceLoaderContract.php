<?php
namespace Plenty\Modules\DataExchange\Resource\Contracts;

use Plenty\Modules\DataExchange\Resource\Models\ResourceBag;

/**
 * Repository Contract for ResourceLoader
 */
interface ResourceLoaderContract 
{

	public function getResource(
		array $sourceOptions
	);

	public function getResourceBag(
		array $sourceOptions
	):ResourceBag;

	public function validateSourceOptions(
		array $sourceOptions
	);

	public function getLoaderType(
	):string;

}