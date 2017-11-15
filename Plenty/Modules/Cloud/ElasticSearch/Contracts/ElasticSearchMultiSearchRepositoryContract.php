<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * foo
 */
interface ElasticSearchMultiSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	):ElasticSearchMultiSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchMultiSearchRepositoryContract;

	public function execute(
	):array;

}