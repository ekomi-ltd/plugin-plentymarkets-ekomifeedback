<?php
namespace Plenty\Modules\Document\Models;


/**
 * The document model contains information about actual documents.
 */
abstract class Document 
{

	const RECEIPT = 'receipt';

	const Z_REPORT = 'z_report';

	const INVOICE_EXTERNAL = 'invoice_external';

	const INVOICE = 'invoice';

	const DELIVERY_NOTE = 'delivery_note';

	const CREDIT_NOTE = 'credit_note';

	const ORDER_CONFIRMATION = 'order_confirmation';

	const OFFER = 'offer';

	const REORDER = 'reorder';

	const DUNNING_LETTER = 'dunning_letter';

	const REPAIR_BILL = 'repair_bill';

	const PICKUP_DELIVERY = 'pickup_delivery';

	const RETURN_NOTE = 'return_note';

	const SUCCESS_CONFIRMATION = 'success_confirmation';

	const MULTI_INVOICE = 'multi_invoice';

	const MULTI_CREDIT_NOTE = 'multi_credit_note';

	const CUSTOMER = 'customer';

	const TICKET = 'ticket';

	const ITEM = 'item';

	const WEBSHOP = 'webshop';

	const WEBSHOP_CUSTOMER = 'webshop_customer';

	const BLOG = 'blog';

	const ADMIN = 'admin';

	const CORRECTION_DOCUMENT = 'correction_document';

	const EBICS_HASH = 'ebics_hash';

	const CATEGORY = 'category';

	const FACET = 'facet';

	const SETTLEMENT_REPORT = 'settlement_report';

	const REVERSAL_DOCUMENT = 'reversal_document';

	const REFUND_REVERSAL_DOCUMENT = 'reversal_refund';

	const SHIPPING_LABEL = 'shipping_label';

	const SHIPPING_EXPORT_LABEL = 'shipping_export_label';

	const SOURCE_KLARNA = 'klarna';

	const SOURCE_SOAP = 'soap';

	const SOURCE_ADMIN = 'admin';

	const SOURCE_HITMEISTER = 'hitmeister';

	const SOURCE_PAYPAL = 'paypal';

	const SOURCE_REST = 'rest';

	const UPDATED_AT = 'plenty_document_updated';

	const CREATED_AT = 'plenty_document_created';
	public		$id;
	public		$type;
	public		$number;
	public		$numberWithPrefix;
	public		$path;
	public		$userId;
	public		$source;
	public		$displayDate;
	public		$content;
	public		$createdAt;
	public		$updatedAt;
	public		$references;
	public		$contacts;
	public		$orders;
	public		$webstores;
	public		$categories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}