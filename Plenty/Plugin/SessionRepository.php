<?php
namespace Plenty\Plugin;


/**
 * session repository
 */
abstract class SessionRepository 
{

	/**
	 * Determine if the given session value exists.
	 */
	abstract public function has(
		string $key
	):bool;

	/**
	 * Get the specified session value.
	 */
	abstract public function get(
		string $key, 
		 $default = null
	);

	/**
	 * Set a given session value.
	 */
	abstract public function set(
		string $key, 
		 $value = null
	);

	/**
	 * Prepend a value onto an array session value.
	 */
	abstract public function prepend(
		string $key, 
		 $value
	);

	/**
	 * Push a value onto an array session value.
	 */
	abstract public function push(
		string $key, 
		 $value
	);

	abstract public static function getPrefix(
	):string;

}