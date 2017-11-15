<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket owner model.
 */
abstract class TicketOwner 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$ticketId;
	public		$userId;
	public		$roleId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}