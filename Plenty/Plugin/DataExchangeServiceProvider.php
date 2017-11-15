<?php
namespace Plenty\Plugin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Data Exchange service provider
 */
abstract class DataExchangeServiceProvider 
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