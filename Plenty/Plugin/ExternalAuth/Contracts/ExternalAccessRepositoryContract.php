<?php
namespace Plenty\Plugin\ExternalAuth\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Plugin\ExternalAuth\Models\ExternalAccess;

/**
 * Find and create ExternalAccess-datasets
 */
interface ExternalAccessRepositoryContract 
{

	/**
	 * Create a new ExternalAccess record
	 */
	public function create(
		array $data
	):ExternalAccess;

	/**
	 * Find
	 */
	public function findForTypeAndExternalId(
		string $type, 
		string $externalId
	):ExternalAccess;

	public function findForTypeAndContactId(
		string $type, 
		int $contactId
	):ExternalAccess;

}