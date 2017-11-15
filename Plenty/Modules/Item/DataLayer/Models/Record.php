<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * Record
 */
abstract class Record 
{
	public		$itemBase;
	public		$itemPropertyList;
	public		$itemCrossSellingList;
	public		$itemDescription;
	public		$itemShippingProfilesList;
	public		$variationAttributeValueList;
	public		$variationBarcode;
	public		$variationBarcodeList;
	public		$variationBase;
	public		$variationBundleComponentList;
	public		$variationCategoryList;
	public		$variationImageList;
	public		$variationLinkMarketplace;
	public		$variationLinkWebstore;
	public		$variationMarketStatus;
	public		$variationRecommendedRetailPrice;
	public		$variationRecommendedRetailPriceList;
	public		$variationRetailPrice;
	public		$variationRetailPriceList;
	public		$variationStandardCategory;
	public		$variationStock;
	public		$variationStockBuffer;
	public		$variationStockList;
	public		$variationSupplierList;
	public		$variationWarehouse;
	public		$variationWarehouseList;
	public		$variationSpecialOfferRetailPrice;
	public		$variationSpecialOfferRetailPriceList;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}