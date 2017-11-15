<?php
namespace Plenty\Modules\System\Statistic\Models;


/**
 * Represent a list of cloud metrics objects
 */
abstract class CloudMetricsList 
{
	public		$page;
	public		$totalsCount;
	public		$isLastPage;
	public		$objects;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}