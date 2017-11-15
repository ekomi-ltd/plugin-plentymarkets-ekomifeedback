<?php
namespace Plenty\Modules\DataExchange\Resource\Contracts;


/**
 * Repository Contract for ResourceParser
 */
interface ResourceParserContract 
{

	public function next(
		 $resource, 
		array $parseOptions
	):array;

	public function getParserType(
	):string;

}