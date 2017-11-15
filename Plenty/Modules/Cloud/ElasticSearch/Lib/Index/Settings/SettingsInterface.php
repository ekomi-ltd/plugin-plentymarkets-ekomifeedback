<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index\Settings;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface SettingsInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}