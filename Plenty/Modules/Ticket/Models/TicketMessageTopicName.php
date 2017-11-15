<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket message topic name model.
 */
abstract class TicketMessageTopicName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$topicId;
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