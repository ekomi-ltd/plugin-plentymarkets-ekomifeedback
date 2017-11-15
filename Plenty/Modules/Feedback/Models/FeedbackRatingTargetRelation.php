<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback rating target relation model.
 */
abstract class FeedbackRatingTargetRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$ratingId;
	public		$ratingRelationType;
	public		$ratingRelationTargetId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}