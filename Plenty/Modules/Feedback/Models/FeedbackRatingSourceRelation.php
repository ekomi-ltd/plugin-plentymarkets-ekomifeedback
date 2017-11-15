<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback rating source relation model.
 */
abstract class FeedbackRatingSourceRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$ratingId;
	public		$ratingRelationType;
	public		$ratingRelationSourceId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}