<?php
namespace Plenty\Modules\Template\Design\Config\Models;


/**
 * Design configuration model
 */
abstract class DesignConfig 
{
	public		$webstoreId;
	public		$error404ContentPageId;
	public		$bankContentPageId;
	public		$cancellationRightsContentPageId;
	public		$termsConditionsContentPageId;
	public		$contactContentPageId;
	public		$legalDisclosureContentPageId;
	public		$helpContentPageId;
	public		$itemNotFoundContentPageId;
	public		$paymentMethodsContentPageId;
	public		$privacyPolicyContentPageId;
	public		$shippingContentPageId;
	public		$frontPageContentPageId;
	public		$customerRegistrationPageId;
	public		$orderConfirmationPageId;
	public		$lostPasswordPageId;
	public		$loginPageId;
	public		$logoutPageId;
	public		$typeOfCheckout;
	public		$checkoutStep1PageId;
	public		$checkoutStep2PageId;
	public		$checkoutStep3PageId;
	public		$checkoutStep4PageId;
	public		$checkoutStep5PageId;
	public		$checkoutStep6PageId;
	public		$checkoutStep7PageId;
	public		$checkoutStep8PageId;
	public		$checkoutStep9PageId;
	public		$checkoutStep10PageId;
	public		$pageDesignWebshop;
	public		$pageDesignCheckout;
	public		$pageDesignMyAccount;
	public		$pageDesignBlog;
	public		$pageDesignForum;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}