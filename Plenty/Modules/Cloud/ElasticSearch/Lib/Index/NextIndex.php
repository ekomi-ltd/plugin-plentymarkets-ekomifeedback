<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Info\BaseInfo;

/**
 * to bew written
 */
abstract class NextIndex implements IndexInterface

{

	const KEY_IS_READY = 'isReady';

	const KEY_VERSION = 'version';

	abstract public function getType(
	);

	abstract public function getVersion(
	);

	abstract public function getDomain(
	):string;

	abstract public function getSettingsClassName(
	);

	abstract public function getMappingClassName(
	);

	abstract public function getNext(
	);

	abstract public function getScrollRepositoryClassName(
	);

	abstract public function hasUpdatedAt(
	):bool;

	abstract public function isReady(
	):bool;

	/**
	 * Vorrübergehender Cheat - alles was noch keine Version hat,
darf nicht über die "neuen" Prozesse befüllt werden!
	 */
	abstract public function maySynchronize(
	):bool;

	abstract public function getPlentyId(
	);

	abstract public function getIdentifier(
	):string;

	/**
	 * Checks whether ElasticSearch is generally available,
and whether the index has already been created.
	 */
	abstract public function isAvailable(
	):bool;

	abstract public function setRefreshInterval(
		 $value
	);

	abstract public function resetAvailibilityStatus(
	);

	abstract public function getMeta(
	):array;

	abstract public function getInfo(
	):BaseInfo;

	abstract public function mayBeQueuedForCreation(
	):bool;

}