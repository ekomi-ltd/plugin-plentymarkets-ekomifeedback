<?php
namespace Plenty\Modules\DataExchange\Resource\Factories;

use Plenty\Modules\DataExchange\Resource\Contracts\ResourceParserContract;
use Plenty\Modules\DataExchange\Resource\Repositories\CSVResourceParserRepository;

abstract class ResourceParserFactory 
{

	abstract public function getResourceParserByType(
		string $type
	):ResourceParserContract;

	abstract public function addParser(
		ResourceParserContract $parser
	);

}