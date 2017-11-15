<?php
namespace Plenty\Modules\Accounting\Vat\Exceptions;


/**
 * Class VatException
 */
abstract class VatException extends \Exception 

{

	/**
	 * No standard vat found!
	 */
	const ERR_NO_STANDARD_VAT_FOUND = 1;

}