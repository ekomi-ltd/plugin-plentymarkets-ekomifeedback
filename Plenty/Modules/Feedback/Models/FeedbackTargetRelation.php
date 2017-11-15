<?php
namespace Plenty\Modules\Feedback\Models;


/**
 * The feedback target relation model.
 */
abstract class FeedbackTargetRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$feedbackId;
	public		$feedbackRelationType;
	public		$feedbackRelationSourceId;
	public		$targetRelationLabel;
	public		$targetRelationName;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}