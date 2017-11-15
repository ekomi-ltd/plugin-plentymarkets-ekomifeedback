<?php
namespace Plenty\Modules\Template\Design\Config\Contracts;

use Plenty\Modules\Template\Design\Config\Models\Design;
use Plenty\Modules\Template\Design\Config\Models\DesignConfig;

/**
 * DesignConfig
 */
interface DesignConfigRepositoryContract 
{

	public function findByDesignName(
		string $designName
	):array;

	public function findByDesignAndWebStore(
		string $designName, 
		int $webStoreId = 0
	):DesignConfig;

	public function findByDesign(
		Design $design
	):array;

	public function update(
		array $data, 
		string $designName, 
		int $webstoreId
	):DesignConfig;

	public function copyDesignConfig(
		string $designName, 
		string $newDesignName
	):DesignConfig;

}