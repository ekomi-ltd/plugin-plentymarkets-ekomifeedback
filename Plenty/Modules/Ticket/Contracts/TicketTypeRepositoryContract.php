<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketType;

/**
 * TicketType repository
 */
interface TicketTypeRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketTypeId
	):TicketType;

	public function create(
		array $data
	):TicketType;

}