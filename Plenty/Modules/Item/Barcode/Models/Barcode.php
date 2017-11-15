<?php
namespace Plenty\Modules\Item\Barcode\Models;


/**
 * The barcode model including barcode referrer
 */
abstract class Barcode 
{

	const UPDATED_AT = 'plenty_item_barcode_last_update_timestamp';

	const CREATED_AT = 'plenty_item_barcode_created_timestamp';

	const ITEMS_PER_PAGE = 50;
	public		$id;
	public		$name;
	public		$type;
	public		$createdAt;
	public		$referrers;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}