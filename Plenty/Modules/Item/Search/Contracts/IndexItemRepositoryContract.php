<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Output\OutputInterface;

/**
 * The contract for the search repository
 */
interface IndexItemRepositoryContract 
{

	/**
	 * Index an item
	 */
	public function index(
		int $variationId = null
	):array;

	/**
	 * Creates or updates index of items which are recently changed
	 */
	public function indexItemsRecentlyChanged(
	):int;

	/**
	 * Deletes item indices
	 */
	public function delete(
		 $itemId
	):boolean;

	/**
	 * Set OutputInterface
	 */
	public function setOutput(
		OutputInterface $output
	);

	public function execute(
	);

}