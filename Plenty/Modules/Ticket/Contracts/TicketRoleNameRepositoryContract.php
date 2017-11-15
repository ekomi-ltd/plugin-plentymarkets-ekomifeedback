<?php
namespace Plenty\Modules\Ticket\Contracts;

use Plenty\Modules\Ticket\Models\TicketRoleName;

/**
 * TicketRoleName Repository
 */
interface TicketRoleNameRepositoryContract 
{

	public function update(
		array $data, 
		int $ticketRoleNameId
	):TicketRoleName;

	public function create(
		array $data
	):TicketRoleName;

	public function findByName(
		string $name, 
		string $lang
	):array;

}