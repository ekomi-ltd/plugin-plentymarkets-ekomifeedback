<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback average model.
 */
abstract class FeedbackAverage 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$feedbackRelationType;
	public		$feedbackRelationTargetId;
	public		$averageValue;
	public		$ratingsCountTotal;
	public		$ratingsCountOf1;
	public		$ratingsCountOf2;
	public		$ratingsCountOf3;
	public		$ratingsCountOf4;
	public		$ratingsCountOf5;
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