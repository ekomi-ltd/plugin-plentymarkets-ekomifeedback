<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeValueMarketName;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the attribute value market name repository
 */
interface AttributeValueMarketNameRepositoryContract 
{

	/**
	 * Creates an attribute value market name. The ID of the attribute value must be specified.
	 */
	public function create(
		array $data
	):AttributeValueMarketName;

	/**
	 * Deletes an attribute value market name. The ID of the attribute value and the language must be specified.
	 */
	public function delete(
		int $valueId, 
		string $lang, 
		string $referenceType
	):DeleteResponse;

	/**
	 * Updates an attribute value market name. The ID of the attribute value and the language must be specified.
	 */
	public function update(
		array $data, 
		int $valueId, 
		string $lang, 
		string $referenceType
	):AttributeValueMarketName;

	/**
	 * Gets an attribute value market name. The ID of the attribute value and the language must be specified.
	 */
	public function findOne(
		int $valueId, 
		string $lang, 
		string $referenceType
	):AttributeValueMarketName;

	/**
	 * Lists attribute value market names. The ID of the attribute and the language must be specified.
	 */
	public function findByAttributeId(
		int $valueId, 
		string $lang
	):array;

	/**
	 * Search attribute value market names.
	 */
	public function search(
		int $page, 
		int $itemsPerPage
	):PaginatedResult;

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