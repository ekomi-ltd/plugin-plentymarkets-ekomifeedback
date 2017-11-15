<?php
namespace Plenty\Modules\EventProcedures\Services;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\EventProcedures\Exceptions\EventProceduresRegisterException;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;

/**
 * The EventProcedureService class offers the possibility to register a procedure class and method that can be called by plentymarkets event procedures.
 */
abstract class EventProceduresService 
{

	/**
	 * Register a procedure class
	 */
	abstract public function registerProcedure(
		string $moduleName, 
		string $eventType, 
		array $procedureNames, 
		string $procedureClass, 
		string $procedureGroup = \Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry::PROCEDURE_GROUP_ORDER
	):bool;

}