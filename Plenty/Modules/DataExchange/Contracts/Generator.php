<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\DataExchange\Models\Export;
use Plenty\Modules\DataExchange\Models\FormatSetting;
use Plenty\Modules\DataExchange\Services\FileService;

/**
 * Generator
 */
abstract class Generator 
{

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