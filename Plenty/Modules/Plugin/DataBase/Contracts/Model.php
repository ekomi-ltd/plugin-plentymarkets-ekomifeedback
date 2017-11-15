<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;


/**
 * Database model
 */
abstract class Model 
{

	const FIELD_TYPE_INT = 'int';

	const FIELD_TYPE_DECIMAL = 'decimal';

	const FIELD_TYPE_STRING = 'string';

	const FIELD_TYPE_BOOL = 'bool';

	const FIELD_TYPE_ARRAY = 'array';
	protected		$primaryKeyFieldName = "id";
	protected		$primaryKeyFieldType = "int";
	protected		$autoIncrementPrimaryKey = true;
	protected		$textFields;
	
	abstract public function getTableName(
	):string;

}