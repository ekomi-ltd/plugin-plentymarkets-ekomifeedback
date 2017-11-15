<?php
namespace Plenty\Modules\Template\Design\Config\Contracts;

use Plenty\Modules\Template\Design\Config\Models\Design;

/**
 * Design
 */
interface DesignRepositoryContract 
{

	public function loadAll(
	):array;

	public function findByDesignName(
		string $designName, 
		bool $withConfig = true
	):Design;

}