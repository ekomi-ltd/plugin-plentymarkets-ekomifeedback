<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * foo
 */
interface ElasticSearchSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}