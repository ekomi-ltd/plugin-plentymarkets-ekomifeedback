<?php
namespace Plenty\Modules\Item\Search\Mutators;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\ObjectMutator;

/**
 * foo
 */
abstract class ImageMutator implements MutatorInterface

{

	abstract public function getPath(
	):string;

	abstract public function mutateObject(
		array $data
	):array;

	abstract public function addMarket(
		int $marketId
	):self;

	abstract public function addClient(
		int $plentyId
	):self;

	abstract public function addListing(
		int $listingId
	):self;

	abstract public function getDependencies(
	):array;

	abstract public function mutate(
		array $data
	):array;

}