<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;

use Plenty\Modules\Frontend\Session\Storage\Contracts\SessionStorageModel;

/**
 * The session storage model for plugins.
 */
abstract class Plugin 
{

	/**
	 * Updates the value of a key. The key and the new value must be specified.
	 */
	abstract public function setValue(
		string $key, 
		 $value
	);

	/**
	 * Gets a value for a key. The key must be specified.
	 */
	abstract public function getValue(
		string $key
	);

}