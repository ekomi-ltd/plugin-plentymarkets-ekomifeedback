<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\Export;
use Plenty\Repositories\Models\PaginatedResult;

interface ExportRepositoryContract 
{

	public function create(
		array $data
	):Export;

	public function update(
		array $data, 
		int $exportId
	):Export;

	public function delete(
		int $exportId
	):bool;

	public function search(
		array $params = [], 
		array $with = [], 
		array $columns = []
	):PaginatedResult;

	public function findById(
		int $exportId, 
		array $with = []
	):Export;

}