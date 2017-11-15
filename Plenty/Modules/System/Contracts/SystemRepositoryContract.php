<?php
namespace Plenty\Modules\System\Contracts;


/**
 * The Contract for System settings
 */
interface SystemRepositoryContract 
{

	/**
	 * Finds all plenty IDs for the current contact
	 */
	public function findMyPlentyIds(
	):array;

}