<?php
namespace Plenty\Modules\Frontend\LegalInformation\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Frontend\LegalInformation\Models\LegalInformation;

/**
 * Repository contract for LegalInformation model.
 */
interface LegalInformationRepositoryContract 
{

	/**
	 * Get legal information of an online store
	 */
	public function find(
		int $plentyId, 
		string $lang, 
		string $type
	):LegalInformation;

	/**
	 * Save legal information for an online store
	 */
	public function save(
		array $data, 
		int $plentyId, 
		string $lang, 
		string $type
	):LegalInformation;

}