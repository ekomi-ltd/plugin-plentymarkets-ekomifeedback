<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * VariationBase
 */
abstract class VariationBase 
{
	public		$active;
	public		$attributeValueSetId;
	public		$autoStockInvisible;
	public		$bundleTyp;
	public		$autoStockNoStockIcon;
	public		$autoStockPositiveStockIcon;
	public		$autoStockVisible;
	public		$availability;
	public		$averageOrderQuantity;
	public		$content;
	public		$unitCombinationId;
	public		$createdTimestamp;
	public		$customNumber;
	public		$estimatedAvailability;
	public		$externalId;
	public		$extraShippingCharge1;
	public		$extraShippingCharge2;
	public		$heightMm;
	public		$id;
	public		$itemId;
	public		$lastUpdateTimestamp;
	public		$lengthMm;
	public		$limitOrderByStockSelect;
	public		$mainWarehouse;
	public		$model;
	public		$operatingCostsPercent;
	public		$packingUnits;
	public		$packingUnitType;
	public		$parentVariationId;
	public		$parentItemVariationQuantity;
	public		$picking;
	public		$customsPercent;
	public		$position;
	public		$priceCalculationId;
	public		$primaryVariation;
	public		$primaryVariationId;
	public		$purchasePrice;
	public		$storageCosts;
	public		$transportationCosts;
	public		$unitId;
	public		$unitLoadDevice;
	public		$unitsContained;
	public		$vatId;
	public		$variationName;
	public		$weightG;
	public		$weightNetG;
	public		$maximumOrderQuantity;
	public		$minimumOrderQuantity;
	public		$intervalOrderQuantity;
	public		$availableUntil;
	public		$releaseDate;
	public		$widthMm;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}