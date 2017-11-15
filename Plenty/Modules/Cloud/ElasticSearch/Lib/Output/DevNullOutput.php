<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Output;


/**
 * to be written
 */
abstract class DevNullOutput 
{

	abstract public function write(
		string $message
	);

	abstract public function info(
		string $message
	);

	abstract public function error(
		string $message
	);

}