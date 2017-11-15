<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status group name model.
 */
abstract class TicketStatusGroupName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}