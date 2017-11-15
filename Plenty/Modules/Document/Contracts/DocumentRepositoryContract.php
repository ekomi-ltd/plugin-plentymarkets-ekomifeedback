<?php
namespace Plenty\Modules\Document\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Document\Models\Document;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Download and list order documents as well as download, list, upload and delete category documents.
 */
interface DocumentRepositoryContract 
{

	/**
	 * Get the path to a document
	 */
	public function getDocumentPath(
		int $id
	);

	/**
	 * Get a document
	 */
	public function findById(
		int $id, 
		array $columns = []
	):Document;

	/**
	 * List documents
	 */
	public function find(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Upload order documents
	 */
	public function uploadOrderDocuments(
		int $orderId, 
		string $type, 
		array $data
	):array;

	/**
	 * Upload category documents
	 */
	public function uploadCategoryDocuments(
		int $categoryId, 
		array $data
	):array;

	/**
	 * Delete a category document.
	 */
	public function deleteCategoryDocument(
		int $categoryId, 
		int $documentId
	):bool;

	public function uploadOrderShippingPackageDocuments(
		int $packageId, 
		string $type, 
		string $document
	):array;

	public function findOrderShippingPackageDocuments(
		int $packageId, 
		string $type
	):array;

	public function deleteOrderShippingPackageDocuments(
		int $packageId
	):bool;

	public function getDocumentStorageObject(
		 $key
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