<?php
namespace Plenty\Plugin\Templates\Factories;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Extensions\Twig_SimpleFilter;
use Plenty\Plugin\Templates\Extensions\Twig_SimpleFunction;

/**
 * Twig Factory
 */
abstract class TwigFactory 
{

	abstract public function register(
	);

	abstract public function createSimpleFunction(
		string $name, 
		 $callable, 
		array $params = []
	):Twig_SimpleFunction;

	abstract public function createSimpleFilter(
		string $name, 
		 $callable, 
		array $params = []
	):Twig_SimpleFilter;

}