<?php
namespace Plenty\Modules\Order\ContactWish\Contracts;

use Plenty\Modules\Order\ContactWish\Models\ContactWish;

/**
 * This interface allows you to get and create contact wishes.
 */
interface ContactWishRepositoryContract 
{

	/**
	 * Get the contact wish
	 */
	public function getContactWish(
		int $orderId
	):ContactWish;

	/**
	 * Create a contact wish
	 */
	public function createContactWish(
		int $orderId, 
		string $text
	):ContactWish;

}