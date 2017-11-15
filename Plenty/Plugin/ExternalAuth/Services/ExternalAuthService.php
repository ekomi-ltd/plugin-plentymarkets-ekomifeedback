<?php
namespace Plenty\Plugin\ExternalAuth\Services;

use Plenty\Modules\Authentication\Services\AccountAuthenticationProxy;
use Plenty\Plugin\ExternalAuth\Contracts\ExternalAccessRepositoryContract;
use Plenty\Plugin\ExternalAuth\Models\ExternalAccess;
use Plenty\Plugin\ExternalAuth\Repositories\ExternalAccessRepository;

/**
 * Log in users with external auth
 */
abstract class ExternalAuthService 
{

	abstract public function logInWithExternalUserId(
		string $externalId, 
		string $type
	);

}