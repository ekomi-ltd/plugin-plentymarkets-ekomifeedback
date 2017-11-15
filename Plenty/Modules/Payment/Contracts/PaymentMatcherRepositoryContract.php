<?php
namespace Plenty\Modules\Payment\Contracts;


/**
 * The PaymentMatcherRepositoryContract
 */
interface PaymentMatcherRepositoryContract 
{

	public function checkMapFindAssignPayment(
		int $mopId, 
		 $data
	):string;

}