<?php
namespace Plenty\Modules\Account\Contact\ContactEvent\Contracts;

use Plenty\Modules\Account\Contact\ContactEvent\Models\ContactEvent;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactEventRepositoryContract is the interface for the contact event repository. This interface allows to list contact events.
 */
interface ContactEventRepositoryContract 
{

	/**
	 * Lists contact events identified by the contact that is currently logged into the system.
	 */
	public function listEvents(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

}