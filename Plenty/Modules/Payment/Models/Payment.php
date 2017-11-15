<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment model
 */
abstract class Payment 
{

	const TRANSACTION_TYPE_PROVISIONAL_POSTING = 1;

	const TRANSACTION_TYPE_BOOKED_POSTING = 2;

	const TRANSACTION_TYPE_SPLITTED_POSTING = 3;

	const TRANSACTION_TYPE_VIRTUAL_POSTING = 4;

	const STATUS_AWAITING_APPROVAL = 1;

	const STATUS_APPROVED = 2;

	const STATUS_CAPTURED = 3;

	const STATUS_PARTIALLY_CAPTURED = 4;

	const STATUS_CANCELED = 5;

	const STATUS_REFUSED = 6;

	const STATUS_AWAITING_RENEWAL = 7;

	const STATUS_EXPIRED = 8;

	const STATUS_REFUNDED = 9;

	const STATUS_PARTIALLY_REFUNDED = 10;

	const STATUS_DUPLICATED = 11;

	const ORIGIN_UNDEF = 0;

	const ORIGIN_SYSTEM = 1;

	const ORIGIN_MANUAL = 2;

	const ORIGIN_SOAP = 3;

	const ORIGIN_IMPORT = 4;

	const ORIGIN_SPLITTED = 5;

	const ORIGIN_PLUGIN = 6;

	const PAYMENT_TYPE_DEBIT = 'debit';

	const PAYMENT_TYPE_CREDIT = 'credit';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$amount;
	public		$exchangeRatio;
	public		$parentId;
	public		$deleted;
	public		$unaccountable;
	public		$currency;
	public		$type;
	public		$hash;
	public		$origin;
	public		$receivedAt;
	public		$importedAt;
	public		$status;
	public		$transactionType;
	public		$mopId;
	public		$parent;
	public		$method;
	public		$histories;
	public		$properties;
	public		$regenerateHash;
	public		$updateOrderPaymentStatus;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}