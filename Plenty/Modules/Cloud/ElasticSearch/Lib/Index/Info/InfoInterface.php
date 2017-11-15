<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Info;


/**
 * foo
 */
interface InfoInterface 
{

	public function get(
		string $key, 
		 $default = null
	);

	public function set(
		string $key, 
		 $value
	);

	public function remove(
		string $key
	);

}