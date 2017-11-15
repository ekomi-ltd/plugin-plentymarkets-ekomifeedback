<?php
namespace Plenty\Plugin\Data\Model;


/**
 * resource information
 */
abstract class ResourceInformation 
{

	abstract public function getPath(
	):string;

	abstract public function getContentUrl(
	):string;

	abstract public function getData(
	);

}