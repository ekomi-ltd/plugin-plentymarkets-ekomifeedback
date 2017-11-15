<?php
namespace Plenty\Modules\Feedback\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Feedback\Models\FeedbackRating;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Get, create and delete feedback ratings.
 */
interface FeedbackRatingRepositoryContract 
{

	/**
	 * Get a feedback rating
	 */
	public function getFeedbackRating(
		int $feedbackRatingId
	):FeedbackRating;

	/**
	 * List feedback ratings
	 */
	public function listFeedbackRatings(
	):Collection;

	/**
	 * Create a feedback rating
	 */
	public function createFeedbackRating(
		array $data
	):FeedbackRating;

	/**
	 * Delete a feedback rating
	 */
	public function deleteFeedbackRating(
		int $feedbackRatingId
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