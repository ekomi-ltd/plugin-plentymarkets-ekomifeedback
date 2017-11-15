<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * generator for csv content
 */
abstract class CSVPluginGenerator 
{

	protected function setDelimiter(
		string $delimiter
	)
	{
	}

	protected function setEnclosure(
		string $enclosure
	)
	{
	}

	protected function addCSVContent(
		array $data
	)
	{
	}

	protected function addBulkCSVContent(
		string $data
	)
	{
	}

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generatePluginContent(
		 $resultData, 
		array $formatSettings = [], 
		array $filter = []
	);

}