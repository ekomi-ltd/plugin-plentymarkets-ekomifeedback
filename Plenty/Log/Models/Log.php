<?php
namespace Plenty\Log\Models;


/**
 * The log entity model
 */
abstract class Log 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$createdAt;
	public		$integration;
	public		$identifier;
	public		$code;
	public		$referenceType;
	public		$referenceValue;
	public		$level;
	public		$additionalInfo;
	public		$callerFunction;
	public		$callerLine;
	public		$references;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}