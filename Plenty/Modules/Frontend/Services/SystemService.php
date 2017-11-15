<?php
namespace Plenty\Modules\Frontend\Services;


/**
 * Frontend-service for system information
 */
abstract class SystemService 
{

	abstract public function getPlentyId(
	):int;

	abstract public function getWebstoreId(
	):int;

}