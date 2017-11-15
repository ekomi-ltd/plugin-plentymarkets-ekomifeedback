<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;


/**
 * Database contract
 */
interface DataBase 
{

	public function save(
		Model $model
	):Model;

	public function find(
		string $modelClassName, 
		 $primaryKeyFieldValue
	):Model;

	public function query(
		string $modelClassName
	):Query;

	public function delete(
		Model $model
	):bool;

}