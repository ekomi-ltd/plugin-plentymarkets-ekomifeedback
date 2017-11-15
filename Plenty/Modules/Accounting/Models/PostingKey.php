<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The Posting Key Model. A posting key is always associated with an accounting location and holds an posting key for each configured vat rate.
 */
abstract class PostingKey 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}