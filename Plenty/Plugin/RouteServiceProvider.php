<?php
namespace Plenty\Plugin;

use Illuminate\Routing\Router;
use Plenty\Modules\Plugin\Factories\PluginLoaderFactory;
use Plenty\Providers\RouteServiceProvider as PlentyRouteServiceProvider;

/**
 * Route service provider
 */
abstract class RouteServiceProvider 
{

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