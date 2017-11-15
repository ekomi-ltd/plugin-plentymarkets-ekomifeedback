<?php
namespace Plenty\Modules\Feedback\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Feedback\Models\FeedbackComment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Get, create and delete feedback comments.
 */
interface FeedbackCommentRepositoryContract 
{

	/**
	 * Get a feedback comment
	 */
	public function getFeedbackComment(
		int $feedbackCommentId
	):FeedbackComment;

	/**
	 * List feedback comments
	 */
	public function listFeedbackComments(
	):Collection;

	/**
	 * Create a feedback comment
	 */
	public function createFeedbackComment(
		array $data
	):FeedbackComment;

	/**
	 * Delete a feedback comment
	 */
	public function deleteFeedbackComment(
		int $feedbackCommentId
	);

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}