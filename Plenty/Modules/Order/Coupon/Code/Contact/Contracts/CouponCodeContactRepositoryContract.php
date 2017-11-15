<?php
namespace Plenty\Modules\Order\Coupon\Code\Contact\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Coupon\Code\Contact\Models\CouponCodeContact;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This is the contract for the coupon codes by contacts repository. It allows you to list coupon codes redeemed by a contact as well as to create, update and delete redeemed coupon codes.
 */
interface CouponCodeContactRepositoryContract 
{

	/**
	 * Create redeemed coupons for a contact.
	 */
	public function create(
		array $data
	):CouponCodeContact;

	/**
	 * Update a redeemed coupon of a contact.
	 */
	public function update(
		int $contactId, 
		int $campaignId, 
		string $coupon, 
		array $data
	):CouponCodeContact;

	/**
	 * Get a redeemed coupon for a contact
	 */
	public function find(
		int $contactId, 
		int $campaignId, 
		string $coupon
	):CouponCodeContact;

	/**
	 * List redeemed coupons for a contact
	 */
	public function findByContact(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * List redeemed coupons of a campaign.
	 */
	public function findByCampaign(
		int $campaignId, 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * List redeemed coupons of a coupon code
	 */
	public function findByCoupon(
		string $coupon, 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

}