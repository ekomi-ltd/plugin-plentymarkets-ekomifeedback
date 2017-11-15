<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketTypeName;

/**
 * TicketTypeName repository
 */
interface TicketTypeNameRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketTypeNameId
	):TicketTypeName;

	public function create(
		array $data
	):TicketTypeName;

	public function findByName(
		string $name, 
		string $lang
	):array;

}