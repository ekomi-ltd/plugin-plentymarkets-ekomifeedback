<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback comment model.
 */
abstract class FeedbackComment 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$message;
	public		$isVisible;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}