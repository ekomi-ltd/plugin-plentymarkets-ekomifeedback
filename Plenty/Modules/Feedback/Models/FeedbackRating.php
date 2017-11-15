<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback rating model.
 */
abstract class FeedbackRating 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$ratingValue;
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