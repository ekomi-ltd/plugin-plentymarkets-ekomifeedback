<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries;


/**
 * The shipping provider entry contains all information needed to use module shipping in plentymarkets shipping .
 */
abstract class ShippingServiceProviderEntry 
{

	/**
	 * Get the
	 */
	abstract public function getShippingServiceProviderClasses(
	):array;

	/**
	 * Get the
	 */
	abstract public function getShippingServiceProviderNames(
	):array;

	/**
	 * Set the
	 */
	abstract public function setShippingServiceProviderNames(
		array $shippingServiceProviderNames
	):ShippingServiceProviderEntry;

	/**
	 * Get the
	 */
	abstract public function getShippingServiceProviderCode(
	):string;

	/**
	 * Set the
	 */
	abstract public function setShippingServiceProviderCode(
		string $shippingServiceProviderCode
	):ShippingServiceProviderEntry;

	abstract public function getShippingServiceProviderClass(
		string $methodName
	):string;

	abstract public function methodExists(
		string $methodName
	):bool;

}