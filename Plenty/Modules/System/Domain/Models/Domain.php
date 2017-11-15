<?php
namespace Plenty\Modules\System\Domain\Models;


/**
 * Domain
 */
abstract class Domain 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$plentyId;
	public		$active;
	public		$domain;
	public		$ipv4;
	public		$ipv6;
	public		$cloudId;
	public		$storage;
	public		$directory;
	public		$vHostOption;
	public		$allowPhp;
	public		$timeToLive;
	public		$provider;
	public		$authCode;
	public		$renewalMode;
	public		$inserted;
	public		$updated;
	public		$lastDnsUpdate;
	public		$mailserver;
	public		$ownMailserverIp;
	public		$isSubdomain;
	public		$parentDomainId;
	public		$isPrimaryDomain;
	public		$topLevelDomain;
	public		$statusUpdate;
	public		$statusAdd;
	public		$dnsProvider;
	public		$dnsProviderSwitch;
	public		$dnsRecordTtl;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}