<?php
namespace Plenty\Modules\System\Contracts;

use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Repository for Webstore Configuration
 */
interface WebstoreConfigurationRepositoryContract 
{

	public function findByPlentyId(
		int $plentyId
	):WebstoreConfiguration;

	public function findByWebstoreId(
		int $webstoreId
	):WebstoreConfiguration;

}