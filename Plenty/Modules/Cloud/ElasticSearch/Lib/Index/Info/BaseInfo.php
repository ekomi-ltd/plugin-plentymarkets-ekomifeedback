<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Info;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Services\ClientFactory;

/**
 * to bew written
 */
abstract class BaseInfo implements InfoInterface

{

	abstract public function get(
		string $key, 
		 $default = null
	);

	abstract public function set(
		string $key, 
		 $value
	);

	abstract public function remove(
		string $key
	);

}