<?php
namespace Plenty\Modules\Comment\Models;


/**
 * The comment model.
 */
abstract class Comment 
{

	const REFERENCE_TYPE_CATEGORY = 'category';

	const REFERENCE_TYPE_CONTACT = 'contact';

	const REFERENCE_TYPE_ORDER = 'order';

	const REFERENCE_TYPE_ITEM_VARIATION = 'item_variation';

	const CREATED_AT = 'plenty_comment_entry_datetime';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$referenceType;
	public		$referenceValue;
	public		$userId;
	public		$createdAt;
	public		$text;
	public		$isVisibleForContact;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}