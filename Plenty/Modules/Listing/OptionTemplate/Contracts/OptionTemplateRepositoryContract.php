<?php
namespace Plenty\Modules\Listing\OptionTemplate\Contracts;

use Plenty\Modules\Listing\OptionTemplate\Models\OptionTemplate;

/**
 * The contract for the listing option template repository.
 */
interface OptionTemplateRepositoryContract 
{

	/**
	 * Get a preview list of all listing option templates
	 */
	public function preview(
	):array;

	/**
	 * Get option template
	 */
	public function get(
		int $id
	):OptionTemplate;

	/**
	 * Create option template
	 */
	public function create(
		array $data
	):OptionTemplate;

	/**
	 * Update option template
	 */
	public function update(
		int $id, 
		array $data
	);

	/**
	 * Delete option template
	 */
	public function delete(
		int $id
	);

}