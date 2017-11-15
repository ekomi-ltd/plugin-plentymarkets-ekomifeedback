<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketRole;

/**
 * Ticket role repository
 */
interface TicketRoleRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketRoleId
	):TicketRole;

	public function create(
		array $data
	):TicketRole;

}