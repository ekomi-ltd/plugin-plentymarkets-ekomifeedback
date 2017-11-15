<?php
namespace Plenty\Modules\Item\Search\Suggestions;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\TermSuggestion;

/**
 * foo
 */
abstract class SearchSuggestion implements SuggestionInterface

{

	abstract public function setLanguage(
		string $language
	):self;

	abstract public function getName(
	);

	abstract public function getField(
	);

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
	):array;

	abstract public function setText(
		string $text
	):self;

}