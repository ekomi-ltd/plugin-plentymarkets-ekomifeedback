<?php
namespace Plenty\Modules\Payment\Contracts;

use League\Flysystem\Exception;
use Plenty\Modules\Payment\Models\PaymentProperty;

/**
 * The PaymentPropertyRepositoryContract is the interface for the payment property repository. List, get, create and update payment properties.
 */
interface PaymentPropertyRepositoryContract 
{

	/**
	 * Lists properties.
	 */
	public function all(
	):array;

	/**
	 * Gets a property. The ID of the payment property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):array;

	/**
	 * Lists properties of a payment. The ID of the payment must be specified.
	 */
	public function allByPaymentId(
		int $paymentId
	):array;

	/**
	 * Lists properties of a property type. The ID of the property type must be specified.
	 */
	public function allByTypeId(
		int $typeId
	):array;

	/**
	 * Lists properties by creation date. The start and the end of the date range must be specified.
	 */
	public function findByCreatedDateInterval(
		string $startDate, 
		string $endDate
	):array;

	/**
	 * Creates a payment property.
	 */
	public function createProperty(
		 $data
	):PaymentProperty;

	/**
	 * Updates a payment property.
	 */
	public function changeProperty(
		PaymentProperty $data
	):PaymentProperty;

}