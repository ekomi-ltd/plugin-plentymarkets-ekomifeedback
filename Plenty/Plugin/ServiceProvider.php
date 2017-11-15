<?php
namespace Plenty\Plugin;


/**
 * Service provider for plugins
 */
abstract class ServiceProvider 
{

	/**
	 * Add a new middleware to end of the stack if it does not already exist.
	 */
	public function addGlobalMiddleware(
		string $middleware
	)
	{
		return null;
	}

	public function getApplication(
	):Application
	{
		return null;
	}

	public function getEventDispatcher(
	):Events\Dispatcher
	{
		return null;
	}

}