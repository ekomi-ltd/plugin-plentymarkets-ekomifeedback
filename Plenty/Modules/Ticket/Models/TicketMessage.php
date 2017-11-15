<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket message model.
 */
abstract class TicketMessage 
{

	const CREATED_AT = 'create_timestamp';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$ticketId;
	public		$userId;
	public		$createdAt;
	public		$text;
	public		$type;
	public		$source;
	public		$topicId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}