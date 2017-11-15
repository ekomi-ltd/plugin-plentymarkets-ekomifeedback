<?php
namespace Plenty\Plugin\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

/**
 * http request
 */
abstract class Request 
{

	/**
	 * Get all of the input and files for the request.
	 */
	abstract public function all(
	):array;

	/**
	 * Merge new input into the current request's input array.
	 */
	abstract public function merge(
		array $input
	);

	/**
	 * Replace the input for the current request.
	 */
	abstract public function replace(
		array $input
	);

	abstract public function get(
		string $key, 
		 $default = null, 
		bool $deep = false
	);

	/**
	 * Returns the request body content.
	 */
	abstract public function getContent(
	):string;

	/**
	 * Returns the requested URI (path and query string).
	 */
	abstract public function getRequestUri(
	):string;

	/**
	 * Determine if the request contains a given input item key.
	 */
	abstract public function exists(
		 $key
	):bool;

	/**
	 * Determine if the request contains a non-empty value for an input item.
	 */
	abstract public function has(
		 $key
	):bool;

	/**
	 * Retrieve an input item from the request.
	 */
	abstract public function input(
		string $key = null, 
		 $default = null
	);

	/**
	 * Get a subset of the items from the input data.
	 */
	abstract public function only(
		 $keys
	):array;

	/**
	 * Get all of the input except for a specified array of items.
	 */
	abstract public function except(
		 $keys
	):array;

	/**
	 * Retrieve a query string item from the request.
	 */
	abstract public function query(
		string $key = null, 
		 $default = null
	);

	/**
	 * Determine if a header is set on the request.
	 */
	abstract public function hasHeader(
		string $key
	):bool;

	/**
	 * Retrieve a header from the request.
	 */
	abstract public function header(
		string $key = null, 
		 $default = null
	);

	/**
	 * Determine if the request is sending JSON.
	 */
	abstract public function isJson(
	):bool;

	/**
	 * Determine if the current request is asking for JSON in return.
	 */
	abstract public function wantsJson(
	):bool;

	/**
	 * Determines whether the current requests accepts a given content type.
	 */
	abstract public function accepts(
		 $contentTypes
	):bool;

	/**
	 * Return the most suitable content type from the given array based on content negotiation.
	 */
	abstract public function prefers(
		 $contentTypes
	):string;

	/**
	 * Determines whether a request accepts JSON.
	 */
	abstract public function acceptsJson(
	):bool;

	/**
	 * Determines whether a request accepts HTML.
	 */
	abstract public function acceptsHtml(
	):bool;

	/**
	 * Get the data format expected in the response.
	 */
	abstract public function format(
		string $default = "html"
	):string;

	/**
	 * Gets the user info.
	 */
	abstract public function getUserInfo(
	):string;

	/**
	 * Returns the HTTP host being requested.
	 */
	abstract public function getHttpHost(
	):string;

	/**
	 * Gets the scheme and HTTP host.
	 */
	abstract public function getSchemeAndHttpHost(
	):string;

	/**
	 * Generates a normalized URI (URL) for the Request.
	 */
	abstract public function getUri(
	):string;

	/**
	 * Generates a normalized URI for the given path.
	 */
	abstract public function getUriForPath(
		string $path
	):string;

	/**
	 * Generates the normalized query string for the Request.
	 */
	abstract public function getQueryString(
	):string;

}