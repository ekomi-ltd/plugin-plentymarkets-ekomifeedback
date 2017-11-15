<?php
namespace Plenty\Modules\Basket\Models;


/**
 * The basket item model
 */
abstract class BasketItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$basketId;
	public		$sessionId;
	public		$orderRowId;
	public		$quantity;
	public		$quantityOriginally;
	public		$itemId;
	public		$priceId;
	public		$attributeValueSetId;
	public		$rebate;
	public		$vat;
	public		$price;
	public		$givenPrice;
	public		$useGivenPrice;
	public		$inputWidth;
	public		$inputLength;
	public		$inputHeight;
	public		$itemType;
	public		$externalItemId;
	public		$noEditByCustomer;
	public		$costCenterId;
	public		$giftPackageForRowId;
	public		$position;
	public		$size;
	public		$shippingProfileId;
	public		$referrerId;
	public		$deliveryDate;
	public		$categoryId;
	public		$reservationDatetime;
	public		$variationId;
	public		$bundleVariationId;
	public		$createdAt;
	public		$updatedAt;
	public		$attributeTotalMarkup;
	public		$basketItemOrderParams;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}