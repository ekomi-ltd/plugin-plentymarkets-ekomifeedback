<?php
namespace Plenty\Modules\Export\Pos\Idea\Models;

use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

/**
 * The export model for IDEA exports.
 */
abstract class Export 
{

	const STATE_OPEN = 'open';

	const STATE_RUNNING = 'running';

	const STATE_DONE = 'done';

	const STATE_FAILED = 'failed';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$token;
	public		$progress;
	public		$currentModule;
	public		$state;
	public		$filename;
	public		$createdAt;
	public		$updatedAt;
	public		$modules;
	public		$options;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}