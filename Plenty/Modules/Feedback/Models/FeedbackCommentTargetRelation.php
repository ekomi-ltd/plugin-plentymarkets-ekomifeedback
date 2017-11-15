<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback comment target relation model.
 */
abstract class FeedbackCommentTargetRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$commentId;
	public		$commentRelationType;
	public		$commentRelationTargetId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}