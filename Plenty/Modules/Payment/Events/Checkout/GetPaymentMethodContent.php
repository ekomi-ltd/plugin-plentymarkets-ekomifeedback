<?php
namespace Plenty\Modules\Payment\Events\Checkout;

use Plenty\Exceptions\ValidationException;

/**
 * The event is triggered after the payment method is selected in the checkout.
 */
abstract class GetPaymentMethodContent 
{

	const RETURN_TYPE_REDIRECT_URL = 'redirectUrl';

	const RETURN_TYPE_EXTERNAL_CONTENT_URL = 'externalContentUrl';

	const RETURN_TYPE_HTML = 'htmlContent';

	const RETURN_TYPE_ERROR = 'errorCode';

	const RETURN_TYPE_CONTINUE = 'continue';

	/**
	 * Updates the ID of the payment method. The ID must be specified.
	 */
	abstract public function setMop(
		int $mop
	):self;

	/**
	 * Gets the ID of the payment method.
	 */
	abstract public function getMop(
	):int;

	/**
	 * Updates the content type.
	 */
	abstract public function setType(
		string $type
	):self;

	/**
	 * Gets the content type.
	 */
	abstract public function getType(
	):string;

	/**
	 * Updates the value of the content type.
	 */
	abstract public function setValue(
		string $value
	):self;

	/**
	 * Gets the value of the content type.
	 */
	abstract public function getValue(
	):string;

	/**
	 * Updates the parameters. The parameters must be specified.
	 */
	abstract public function setParams(
		 $params
	):self;

	/**
	 * Gets the parameters.
	 */
	abstract public function getParams(
	);

}