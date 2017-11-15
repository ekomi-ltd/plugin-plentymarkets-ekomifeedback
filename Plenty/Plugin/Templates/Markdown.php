<?php
namespace Plenty\Plugin\Templates;


/**
 * A simple markdown converter.
 */
abstract class Markdown 
{

	abstract public function renderToHtml(
		string $markdownContent
	):string;

}