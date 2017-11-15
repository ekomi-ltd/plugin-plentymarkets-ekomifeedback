<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator;


/**
 * to be written
 */
interface MutatorInterface 
{

	public function mutate(
		array $data
	):array;

	public function getDependencies(
	):array;

}