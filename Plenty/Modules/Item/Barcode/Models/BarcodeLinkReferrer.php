<?php
namespace Plenty\Modules\Item\Barcode\Models;


/**
 * The barcode link referrer model including the barcode
 */
abstract class BarcodeLinkReferrer 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'plenty_item_barcode_link_referrer_created';

	const UPDATED_AT = 'plenty_item_barcode_link_referrer_updated';
	public		$barcodeId;
	public		$referrerId;
	public		$createdAt;
	public		$updatedAt;
	public		$barcode;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}