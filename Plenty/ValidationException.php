<?php
namespace Plenty\Exceptions;

use Illuminate\Support\MessageBag;

class ValidationException extends \Exception 

{
	private		$messageBag = null;
	
	abstract public function getMessageBag(
	):MessageBag;

	abstract public function setMessageBag(
		MessageBag $messageBag
	):ValidationException;

}