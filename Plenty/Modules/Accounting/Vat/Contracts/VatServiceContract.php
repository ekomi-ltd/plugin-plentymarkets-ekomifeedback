<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Plenty\Modules\Accounting\Vat\Models\Vat;

/**
 * Provides methods for a quick search of VAT fields, VAT rates and VAT names of a specific VAT configuration.
 */
interface VatServiceContract 
{

	/**
	 * Get the VAT field for a VAT rate.
	 */
	public function getVatField(
		Vat $vat, 
		float $vatRate
	):int;

	/**
	 * Get the VAT rate for a VAT field.
	 */
	public function getVatRate(
		Vat $vat, 
		int $vatField
	):float;

	/**
	 * Get the name of a VAT field.
	 */
	public function getVatName(
		Vat $vat, 
		int $vatField
	):string;

}