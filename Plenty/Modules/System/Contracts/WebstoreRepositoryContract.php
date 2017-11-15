<?php
namespace Plenty\Modules\System\Contracts;

use Plenty\Modules\System\Models\Webstore;

/**
 * Repository for Webstore
 */
interface WebstoreRepositoryContract 
{

	/**
	 * Shows all webstores
	 */
	public function loadAll(
	):array;

	/**
	 * Shows a preview of all webstores with id and name
	 */
	public function loadAllPreview(
	):array;

	/**
	 * Shows a specific webstore from type plentymarkets
	 */
	public function findByPlentyId(
		int $plentyId
	):Webstore;

	/**
	 * Shows a specific webstore
	 */
	public function findByStoreIdentifier(
		int $storeIdentifier
	):Webstore;

	/**
	 * Shows a specific webstore
	 */
	public function findById(
		int $clientId
	):Webstore;

}