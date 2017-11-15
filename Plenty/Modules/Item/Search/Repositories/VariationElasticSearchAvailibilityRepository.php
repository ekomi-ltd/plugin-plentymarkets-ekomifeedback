<?php
namespace Plenty\Modules\Item\Search\Repositories;

use Plenty\Modules\Cloud\ElasticSearch\Repositories\ElasticSearchAvailabilityRepository;
use Plenty\Modules\Item\Search\Index\Index;

/**
 * VariationElasticSearchAvailibilityRepository
 */
abstract class VariationElasticSearchAvailibilityRepository 
{

	abstract public function isReady(
	):bool;

	abstract public function isAvailable(
	):bool;

}