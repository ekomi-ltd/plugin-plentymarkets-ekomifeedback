<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * ResultFields
 */
abstract class ResultFields 
{

	abstract public function generateResultFields(
		array $formatSettings = []
	):array;

	protected function setGroupByList(
		array $groupByList
	)
	{
	}

	protected function setOrderByList(
		array $orderByList
	)
	{
	}

}