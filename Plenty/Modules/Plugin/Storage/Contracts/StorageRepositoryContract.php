<?php
namespace Plenty\Modules\Plugin\Storage\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Cloud\Storage\Models\StorageObjectList;
use Plenty\Modules\Plugin\Storage\Exceptions\StorageException;

/**
 * Storage Repository
 */
interface StorageRepositoryContract 
{

	/**
	 * Create an object with content in $body
	 */
	public function uploadObject(
		string $pluginName, 
		string $key, 
		string $body, 
		bool $publicVisible = false, 
		array $metaData = []
	):StorageObject;

	/**
	 * Get an object
	 */
	public function getObject(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):StorageObject;

	/**
	 * Returns the URL to an object identified by its bucket and key. The URL will be signed and set to expire at the provided time.
	 */
	public function getObjectUrl(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false, 
		int $minutesToExpire = 5
	):string;

	/**
	 * Get local file resource of an object. Use this if it is really necessary! Using getObject is the normal and effective way.
	 */
	public function getObjectAsTemporaryFileResource(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):string;

	/**
	 * Checks if object exists
	 */
	public function doesObjectExist(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):bool;

	/**
	 * Executes the DeleteObject operation.
	 */
	public function deleteObject(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):bool;

	/**
	 * Returns some or all (up to 1000) objects
	 */
	public function listObjects(
		string $pluginName, 
		string $prefix = "", 
		int $limit = 0, 
		string $startKey = "", 
		string $continuationToken = "", 
		bool $publicVisible = false, 
		bool $resultKeyWithoutPrefix = true
	):StorageObjectList;

}