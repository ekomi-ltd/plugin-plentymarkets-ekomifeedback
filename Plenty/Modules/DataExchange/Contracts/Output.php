<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\Export;
use Plenty\Modules\DataExchange\Models\OutputParam;

/**
 * Output
 */
interface Output 
{

	/**
	 * process export output
	 */
	public function out(
		string $resource, 
		array $outputParams = [], 
		Export $export = null
	);

}