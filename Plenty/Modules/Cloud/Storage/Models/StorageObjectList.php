<?php
namespace Plenty\Modules\Cloud\Storage\Models;


/**
 * Represent a list of storage objects
 */
abstract class StorageObjectList 
{
	public		$isTruncated;
	public		$nextContinuationToken;
	public		$objects;
	public		$commonPrefixes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}