<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchAvailabilityRepositoryContract;

/**
 * VariationElasticSearchAvailibilityRepositoryContract
 */
interface VariationElasticSearchAvailibilityRepositoryContract 
{

	public function isReady(
	):bool;

	public function isAvailable(
	):bool;

}