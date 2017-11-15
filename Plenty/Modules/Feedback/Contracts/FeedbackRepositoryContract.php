<?php
namespace Plenty\Modules\Feedback\Contracts;

use Plenty\Modules\Feedback\Models\Feedback;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, create and delete feedbacks.
 */
interface FeedbackRepositoryContract 
{

	/**
	 * Get a feedback
	 */
	public function getFeedback(
		int $feedbackId
	);

	public function listFeedbacks(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * Create a feedback
	 */
	public function createFeedback(
		array $data
	);

	/**
	 * Delete a feedback
	 */
	public function deleteFeedback(
		int $feedbackId
	);

	/**
	 * Update a feedback
	 */
	public function updateFeedback(
		array $data, 
		int $feedbackId
	);

	/**
	 * Update the visibility of multiple feedbacks
	 */
	public function updateFeedbacksVisibility(
		array $feedbackIds, 
		bool $isVisible
	);

	/**
	 * Delete multiple feedbacks
	 */
	public function deleteFeedbacks(
		string $feedbackIds
	);

	/**
	 * Lists feedback replies
	 */
	public function listFeedbackReplies(
		int $feedbackId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	);

	/**
	 * Migrate legacy feedbacks
	 */
	public function migrateLegacyFeedbacks(
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