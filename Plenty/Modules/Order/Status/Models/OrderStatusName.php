<?php
namespace Plenty\Modules\Order\Status\Models;


/**
 * The order status name model represents a status name for a given status ID. However, a status can not only have one name, but two names per language: a frontend name and a backend name.
 */
abstract class OrderStatusName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$statusId;
	public		$backendName;
	public		$frontendName;
	public		$lang;
	public		$isVisibleInFrontend;
	public		$status;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}