<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Output;


/**
 * to be written
 */
interface OutputInterface 
{

	public function write(
		string $message
	);

	public function info(
		string $message
	);

	public function error(
		string $message
	);

}