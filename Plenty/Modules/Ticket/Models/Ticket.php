<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket model.
 */
abstract class Ticket 
{

	const UPDATED_AT = 'last_update_timestamp';

	const CREATED_AT = 'create_timestamp';
	public		$id;
	public		$typeId;
	public		$priorityId;
	public		$parentTicketId;
	public		$statusId;
	public		$confidential;
	public		$contactId;
	public		$createdAt;
	public		$updatedAt;
	public		$contactLastUpdateAt;
	public		$deadlineAt;
	public		$finishedAt;
	public		$title;
	public		$progress;
	public		$plentyId;
	public		$source;
	public		$documentsCount;
	public		$hasDocuments;
	public		$childrenCount;
	public		$resubmissionAt;
	public		$parseData;
	public		$owners;
	public		$messages;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}