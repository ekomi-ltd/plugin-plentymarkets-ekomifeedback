<?php
namespace Plenty\Repositories\Models;


/**
 * Delete Response
 */
abstract class DeleteResponse 
{
	public		$affectedRows;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}