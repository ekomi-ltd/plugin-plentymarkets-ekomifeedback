<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * The session storage model for locale settings.
 */
abstract class LocaleSettings 
{
	public		$currency;
	public		$currencyExchange;
	public		$language;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}