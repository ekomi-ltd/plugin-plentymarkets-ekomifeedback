<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback legacy model.
 */
abstract class FeedbackLegacy 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$feedbackId;
	public		$legacyFeedbackId;
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