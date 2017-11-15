<?php
namespace Plenty\Modules\Authentication\Contracts;


/**
 * The ContactAuthenticationRepositoryContract is the interface for the authentication repository. This interface allows to authenticate users in the client (store) by email and password or by contact ID and password. The interface also provides a method for logging out users from the client (store).
 */
interface ContactAuthenticationRepositoryContract 
{

	public function authenticateWithContactEmail(
		string $contactEmail, 
		string $password
	);

	public function authenticateWithContactId(
		int $contactId, 
		string $password
	);

	public function authenticateWithPlentyId(
		int $plentyId, 
		string $password
	);

	public function logout(
	);

}