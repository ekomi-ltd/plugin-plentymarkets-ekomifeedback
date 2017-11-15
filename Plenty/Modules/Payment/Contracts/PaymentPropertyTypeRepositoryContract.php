<?php
namespace Plenty\Modules\Payment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Payment\Models\PaymentPropertyType;

/**
 * The PaymentPropertyTypeRepositoryContract is the interface for the payment property type repository. List, get, create and update payment properties.
 */
interface PaymentPropertyTypeRepositoryContract 
{

	/**
	 * Lists payment property types. The language of the property type must be specified.
	 */
	public function allTypes(
		string $lang
	):array;

	/**
	 * Gets a payment property type. The ID of the property type must be specified.
	 */
	public function findTypesById(
		int $id, 
		string $lang
	):array;

	/**
	 * Creates a payment property type.
	 */
	public function createType(
		 $data
	):PaymentPropertyType;

	/**
	 * Updates a payment property type.
	 */
	public function changeProperty(
		 $data
	):PaymentPropertyType;

}