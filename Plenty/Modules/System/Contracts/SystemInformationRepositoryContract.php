<?php
namespace Plenty\Modules\System\Contracts;


/**
 * Repository for SystemInformation
 */
interface SystemInformationRepositoryContract 
{

	public function loadValue(
		 $key
	);

}