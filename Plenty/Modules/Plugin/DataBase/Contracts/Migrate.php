<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;


/**
 * Migrate models
 */
interface Migrate 
{

	public function createTable(
		string $modelClassName, 
		int $readCapacityUnits = 10, 
		int $writeCapacityUnits = 20
	):bool;

	public function deleteTable(
		string $modelClassName
	):bool;

}