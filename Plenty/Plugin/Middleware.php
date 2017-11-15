<?php
namespace Plenty\Plugin;

use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Middleware
 */
abstract class Middleware 
{

	abstract public function before(
		Request $request
	);

	abstract public function after(
		Request $request, 
		Response $response
	):Response;

}