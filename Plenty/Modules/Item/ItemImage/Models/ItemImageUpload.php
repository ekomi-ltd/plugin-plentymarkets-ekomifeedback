<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * ItemImage
 */
abstract class ItemImageUpload 
{

	const CREATED_AT = 'plenty_item_image_main_insert';

	const UPDATED_AT = 'plenty_item_image_main_last_update';
	public		$id;
	public		$itemId;
	public		$fileType;
	public		$path;
	public		$position;
	public		$created;
	public		$updated;
	public		$uploadImageData;
	public		$uploadUrl;
	public		$uploadFileName;
	public		$names;
	public		$availabilities;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}