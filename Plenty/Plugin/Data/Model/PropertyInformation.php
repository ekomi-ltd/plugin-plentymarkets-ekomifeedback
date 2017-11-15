<?php
namespace Plenty\Plugin\Data\Model;


/**
 * property information
 */
abstract class PropertyInformation 
{

	abstract public function getType(
	):string;

	abstract public function getName(
	):string;

	abstract public function getDescription(
	):string;

}