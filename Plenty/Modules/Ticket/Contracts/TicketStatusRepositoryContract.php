<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketStatus;

/**
 * TicketStatus repository
 */
interface TicketStatusRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketStatusId
	):TicketStatus;

	public function create(
		array $data
	):TicketStatus;

	public function findByTypeId(
		int $typeId
	):array;

}