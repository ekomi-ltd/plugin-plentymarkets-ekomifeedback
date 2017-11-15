<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Processor;


/**
 * to be written
 */
interface ProcessorInterface 
{

	public function process(
		array $data
	):array;

	public function getDependencies(
	):array;

}