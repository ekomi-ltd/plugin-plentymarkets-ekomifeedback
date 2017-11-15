<?php
namespace Plenty\Repositories\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * Contract for PaginationResponse
 */
interface PaginationResponseContract 
{

	public function getTotal(
	);

	public function setTotal(
		 $total
	);

	public function getPage(
	);

	public function setPage(
		 $page
	);

	public function getEntriesPerPage(
	);

	public function setEntriesPerPage(
		 $epp
	);

	public function getResult(
	);

	public function setResult(
		 $entries
	);

	/**
	 * Convert the object to its JSON representation.
	 */
	public function toJson(
		int $options = 0
	):string;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}