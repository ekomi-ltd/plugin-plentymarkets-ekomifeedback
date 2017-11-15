<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket role model.
 */
abstract class TicketRole 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	public		$id;
	public		$position;
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