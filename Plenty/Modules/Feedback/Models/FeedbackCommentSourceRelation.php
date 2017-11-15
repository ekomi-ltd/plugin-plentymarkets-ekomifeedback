<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback comment source relation model.
 */
abstract class FeedbackCommentSourceRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$commentId;
	public		$commentRelationType;
	public		$commentRelationSourceId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}