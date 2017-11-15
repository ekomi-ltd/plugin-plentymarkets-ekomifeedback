<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status model.
 */
abstract class TicketStatus 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$position;
	public		$statusGroupId;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}