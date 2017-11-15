<?php
namespace Plenty\Plugin;

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\Container as ContainerContract;
use Plenty\Modules\Plugin\Compiler\Services\AllowedPHPCalls;

/**
 * The main application
 */
abstract class Application 
{

	/**
	 * Register a service provider with the application.
	 */
	abstract public function register(
		string $providerClassName
	):ServiceProvider;

	/**
	 * Register a binding with the container.
	 */
	abstract public function bind(
		string $abstract, 
		string $concrete = null, 
		bool $shared = false
	);

	/**
	 * Register a shared binding in the container.
	 */
	abstract public function singleton(
		string $abstract, 
		string $concrete = null
	);

	abstract public function make(
		string $abstract, 
		array $parameters = []
	);

	/**
	 * Throw an HttpException with the given data.
	 */
	abstract public function abort(
		int $code, 
		string $message = "", 
		array $headers = []
	);

	/**
	 * Returns current webstoreId
	 */
	abstract public function getWebstoreId(
	):int;

	abstract public function getPlentyId(
	):int;

	/**
	 * Returns the URL to the plugin resources
	 */
	abstract public function getUrlPath(
		string $pluginName = ""
	):string;

}