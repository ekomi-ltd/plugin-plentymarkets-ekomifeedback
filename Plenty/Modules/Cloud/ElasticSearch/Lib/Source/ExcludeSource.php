<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source;


/**
 * foo
 */
abstract class ExcludeSource implements SourceInterface

{

	abstract public function toArray(
	):array;

	abstract public function getPrefix(
	):string;

	abstract public function activateAll(
	):SourceInterface;

	abstract public function activateList(
		array $fields
	):self;

}