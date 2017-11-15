<?php
namespace Plenty\Modules\EventProcedures\Services\Entries;


/**
 * The procedure entry contains all information needed to use module procedures in plentymarkets event procedures.
 */
abstract class ProcedureEntry 
{

	const EVENT_TYPE_ORDER = 'order';

	const EVENT_TYPE_REORDER = 'reorder';

	const EVENT_TYPE_TICKET = 'ticket';

	const PROCEDURE_GROUP_ITEM = 'item';

	const PROCEDURE_GROUP_ORDER = 'order';

	const PROCEDURE_GROUP_DOCUMENT = 'document';

	const PROCEDURE_GROUP_CONTACT = 'contact';

	const PROCEDURE_GROUP_SHIPPING = 'shipping';

	const PROCEDURE_GROUP_PAYMENT = 'payment';

	const PROCEDURE_GROUP_RETURN = 'return';

	const PROCEDURE_GROUP_LISTING = 'listing';

	/**
	 * Get the
	 */
	abstract public function getModuleName(
	):string;

	/**
	 * Set the
	 */
	abstract public function setModuleName(
		string $moduleName
	):ProcedureEntry;

	/**
	 * Get the
	 */
	abstract public function getEventType(
	):string;

	/**
	 * Set the
	 */
	abstract public function setEventType(
		string $eventType
	):ProcedureEntry;

	/**
	 * Get the
	 */
	abstract public function getProcedureNames(
	):array;

	/**
	 * Set the
	 */
	abstract public function setProcedureNames(
		array $procedureNames
	):ProcedureEntry;

	/**
	 * Get the
	 */
	abstract public function getProcedureGroup(
	):string;

	/**
	 * Set the
	 */
	abstract public function setProcedureGroup(
		string $procedureGroup
	):ProcedureEntry;

	/**
	 * Get the
	 */
	abstract public function getProcedureClass(
	):string;

	/**
	 * Set the
	 */
	abstract public function setProcedureClass(
		string $procedureClass
	):ProcedureEntry;

}