<?php
namespace Plenty\Modules\Account\Events;


/**
 * frontend customer settings event
 */
abstract class FrontendUpdateCustomerSettings 
{

	abstract public function getDeliveryCountryId(
	):int;

	abstract public function setDeliveryCountryId(
		int $deliveryCountryId
	):FrontendUpdateCustomerSettings;

	abstract public function getShowNetPrice(
	):bool;

	abstract public function setShowNetPrice(
		bool $showNetPrice
	):FrontendUpdateCustomerSettings;

	abstract public function getEbaySellerAccount(
	):string;

	abstract public function setEbaySellerAccount(
		string $ebaySellerAccount
	):FrontendUpdateCustomerSettings;

	abstract public function getAccountContactSign(
	):string;

	abstract public function setAccountContactSign(
		string $accountContactSign
	):FrontendUpdateCustomerSettings;

	abstract public function getAccountContactClassId(
	):int;

	abstract public function setAccountContactClassId(
		int $accountContactClassId
	):FrontendUpdateCustomerSettings;

	abstract public function getSalesAgent(
	):string;

	abstract public function setSalesAgent(
		string $salesAgent
	):FrontendUpdateCustomerSettings;

	abstract public function getAccountContractClassId(
	):int;

	abstract public function setAccountContractClassId(
		int $accountContractClassId
	):FrontendUpdateCustomerSettings;

}