<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;

/**
 * foo
 */
abstract class TermSuggestion implements SuggestionInterface

{

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
	):array;

	abstract public function setText(
		string $text
	):self;

	abstract public function getName(
	):string;

	abstract public function getField(
	):string;

}