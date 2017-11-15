<?php
namespace Plenty\Plugin\Templates\Extensions;

use TwigBridge\Twig\Globals;
use \Twig_Extension as TwigExtension;

/**
 * Twig extension
 */
abstract class Twig_Extension 
{

	abstract public function getName(
	):string;

}