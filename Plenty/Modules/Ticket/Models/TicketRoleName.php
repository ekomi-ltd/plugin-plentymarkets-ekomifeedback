<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket role name model.
 */
abstract class TicketRoleName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$roleId;
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