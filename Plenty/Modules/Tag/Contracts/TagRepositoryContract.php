<?php
namespace Plenty\Modules\Tag\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Tag\Models\Tag;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The TagRepositoryContract is the interface for the tag repository.
 */
interface TagRepositoryContract 
{

	/**
	 * Create a new tag.
	 */
	public function create(
		string $name
	):Tag;

	/**
	 * Update a tag.
	 */
	public function update(
		array $data, 
		int $tagId
	):Tag;

	/**
	 * Deletes a tag by given tagId
	 */
	public function delete(
		int $tagId
	);

	public function getTagByName(
		string $name
	):Tag;

	public function getTagsByIds(
		array $ids
	):array;

	public function getTagsByAvailability(
		string $availabilityType
	):array;

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

}