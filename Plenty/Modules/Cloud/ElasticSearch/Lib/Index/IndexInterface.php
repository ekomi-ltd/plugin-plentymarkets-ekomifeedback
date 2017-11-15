<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchScrollRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Info\InfoInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Meta\MetaInterface;

/**
 * to be written
 */
interface IndexInterface 
{

	public function getType(
	):string;

	public function getPlentyId(
	):int;

	public function getVersion(
	):int;

	public function getDomain(
	):string;

	public function getIdentifier(
	):string;

	public function isAvailable(
	):bool;

	public function isReady(
	):bool;

	public function getSettingsClassName(
	):string;

	public function getMappingClassName(
	):string;

	public function getMeta(
	):array;

	public function getInfo(
	):InfoInterface;

	public function resetAvailibilityStatus(
	);

	public function hasUpdatedAt(
	):bool;

	public function getNext(
	):NextIndex;

	public function getScrollRepositoryClassName(
	):string;

}