<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback rating average model.
 */
abstract class FeedbackRatingAverage 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$ratingRelationType;
	public		$ratingRelationTargetId;
	public		$averageValue;
	public		$averageCount;
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