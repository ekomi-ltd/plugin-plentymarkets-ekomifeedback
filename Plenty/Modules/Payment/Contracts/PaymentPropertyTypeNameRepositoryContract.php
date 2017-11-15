<?php
namespace Plenty\Modules\Payment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Payment\Models\PaymentPropertyTypeName;

/**
 * The PaymentPropertyTypeNameRepositoryContract is the interface for the repository of payment property type names. List, get, create and update payment property names.
 */
interface PaymentPropertyTypeNameRepositoryContract 
{

	/**
	 * Lists payment property type names. The language of the property type names must be specified.
	 */
	public function allTypeNames(
		string $lang
	):array;

	/**
	 * Finds a payment property type name. The ID of the payment property type name must be specified.
	 */
	public function findByNameId(
		int $nameId
	):array;

	/**
	 * Creates a payment property type name.
	 */
	public function createTypeName(
		 $data
	):PaymentPropertyTypeName;

	/**
	 * Updates a payment property type name.
	 */
	public function changeProperty(
		 $data
	):array;

}