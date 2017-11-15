<?php
namespace Plenty\Modules\DataExchange\Contracts;


/**
 * generator for csv content
 */
abstract class CSVGenerator 
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

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generateContent(
		 $resultData, 
		array $formatSettings = []
	);

}