<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagRelationship;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Repository for TagRelationship
 */
interface TagRelationshipRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType, 
		int $relationshipValue
	):TagRelationship;

	public function create(
		array $data
	):TagRelationship;

	public function deleteRelation(
		int $relationshipValue, 
		int $tagId
	);

	public function findByValueId(
		int $valueId
	):array;

	public function findByTagId(
		int $tagId
	):array;

	/**
	 * Get a specific tag relationship or return null
	 */
	public function findRelationship(
		int $tagId, 
		int $relationshipValue, 
		string $relationshipType
	):TagRelationship;

	/**
	 * Delete tags by reference value and relationship type
	 */
	public function delete(
		int $relationshipValue, 
		string $relationshipType
	):DeleteResponse;

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