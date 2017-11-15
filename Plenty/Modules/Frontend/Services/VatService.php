<?php
namespace Plenty\Modules\Frontend\Services;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Legacy\Services\Checkout\VatServicePartial;
use Plenty\Legacy\Services\Order\Tax\SessionTaxInformation;
use Plenty\Modules\Account\Address\Contracts\AddressRepositoryContract;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Accounting\Facades\AccountingService;
use Plenty\Modules\Accounting\Vat\Contracts\VatInitContract;
use Plenty\Modules\Accounting\Vat\Contracts\VatRepositoryContract;
use Plenty\Modules\Accounting\Vat\Facades\VatInit;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Plenty\Modules\Frontend\Models\TotalVat;
use Plenty\Modules\Frontend\Session\Storage\Models\Order;
use Plenty\Modules\Order\Contracts\PriceCalculatorContract;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;

/**
 * Frontend-service for vat information
 */
abstract class VatService 
{

	abstract public function getCountryVatId(
	):int;

	abstract public function getCurrentTotalVats(
	):array;

	abstract public function getVat(
		string $taxIdNumber = ""
	):Vat;

	/**
	 * Get the ID of the location
	 */
	abstract public function getLocationId(
		int $countryId = null
	):int;

}