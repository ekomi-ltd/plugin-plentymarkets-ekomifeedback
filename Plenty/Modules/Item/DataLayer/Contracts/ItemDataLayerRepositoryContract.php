<?php
namespace Plenty\Modules\Item\DataLayer\Contracts;

use Plenty\Modules\Item\DataLayer\Models\RecordList;
use Plenty\Modules\Item\DataLayer\Services\ItemDataLayerResultLookup;
use Plenty\Repositories\Models\PaginatedResult;

interface ItemDataLayerRepositoryContract 
{

	public function search(
		array $columns, 
		array $filter = [], 
		array $params = []
	):RecordList;

	public function lookup(
		array $filter = [], 
		array $params = [], 
		bool $calculateNumberOfRows = false
	):ItemDataLayerResultLookup;

	public function searchWithPagination(
		array $columns, 
		array $filter = [], 
		array $params = []
	):PaginatedResult;

}