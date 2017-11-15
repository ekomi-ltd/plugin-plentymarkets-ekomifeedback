<?php
namespace Plenty\Modules\Payment\Models;


/**
 * The payment property model
 */
abstract class PaymentProperty 
{

	const TYPE_TRANSACTION_ID = 1;

	const TYPE_REFERENCE_ID = 2;

	const TYPE_BOOKING_TEXT = 3;

	const TYPE_TRANSACTION_PASSWORD = 4;

	const TYPE_TRANSACTION_CODE = 5;

	const TYPE_AUTHORIZATION_ID = 6;

	const TYPE_CAPTURE_ID = 7;

	const TYPE_REFUND_ID = 8;

	const TYPE_CREDIT_NOTE_ID = 9;

	const TYPE_ORDER_REFERENCE = 10;

	const TYPE_NAME_OF_SENDER = 11;

	const TYPE_EMAIL_OF_SENDER = 12;

	const TYPE_BANK_CODE_OF_SENDER = 13;

	const TYPE_BANK_NAME_OF_SENDER = 14;

	const TYPE_ACCOUNT_NUMBER_OF_SENDER = 15;

	const TYPE_ACCOUNT_HOLDER_OF_SENDER = 16;

	const TYPE_COUNTRY_OF_SENDER_ACCOUNT = 17;

	const TYPE_IBAN_OF_SENDER = 18;

	const TYPE_BIC_OF_SENDER = 19;

	const TYPE_NAME_OF_RECEIVER = 20;

	const TYPE_ACCOUNT_OF_RECEIVER = 21;

	const TYPE_PAYMENT_TEXT = 22;

	const TYPE_ORIGIN = 23;

	const TYPE_SHIPPING_ADDRESS_ID = 24;

	const TYPE_INVOICE_ADDRESS_ID = 25;

	const TYPE_ITEM_BUYER = 26;

	const TYPE_ITEM_NUMBER = 27;

	const TYPE_ITEM_TRANSACTION_ID = 28;

	const TYPE_EXTERNAL_TRANSACTION_TYPE = 29;

	const TYPE_EXTERNAL_TRANSACTION_STATUS = 30;

	const TYPE_IBAN_OF_RECEIVER = 31;

	const TYPE_BIC_OF_RECEIVER = 32;

	const TYPE_TRANSACTION_FEE = 33;

	const TYPE_TRANSACTION_ENDURANCE = 34;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$paymentId;
	public		$typeId;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}