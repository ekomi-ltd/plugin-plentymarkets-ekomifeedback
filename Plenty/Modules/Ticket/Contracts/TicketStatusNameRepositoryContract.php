<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketStatusName;

/**
 * TicketStatusName Repository
 */
interface TicketStatusNameRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketStatusNameId
	):TicketStatusName;

	public function create(
		array $data
	):TicketStatusName;

	public function findByName(
		string $name, 
		string $lang
	):array;

}