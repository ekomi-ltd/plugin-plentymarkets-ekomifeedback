<?php
namespace Plenty\Modules\Order\Models;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Account\Models\Account;

/**
 * The order relation reference model specifies how references and orders are related to one another.
 */
abstract class OrderRelationReference 
{

	const REFERENCE_TYPE_CONTACT = 'contact';

	const REFERENCE_TYPE_ACCOUNT = 'account';

	const REFERENCE_TYPE_WAREHOUSE = 'warehouse';

	const RELATION_TYPE_SENDER = 'sender';

	const RELATION_TYPE_RECEIVER = 'receiver';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$referenceType;
	public		$referenceId;
	public		$relation;
	public		$order;
	public		$contactReceiver;
	public		$contactSender;
	public		$accountReceiver;
	public		$accountSender;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}