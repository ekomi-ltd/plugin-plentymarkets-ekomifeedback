<?php
namespace Plenty\Repositories\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * DeleteResponse Interface
 */
interface DeleteResponseContract 
{

	public function getAffectedRows(
	):int;

	public function setAffectedRows(
		int $value
	);

	public function increment(
	):int;

	public function decrement(
	):int;

}