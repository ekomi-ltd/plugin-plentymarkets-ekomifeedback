<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BuiltIn;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BaseMutator;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * foo
 */
abstract class LanguageMutator implements MutatorInterface

{

	abstract public function mutate(
		array $data
	):array;

	abstract public function addLanguage(
		string $language
	);

	abstract public function setLanguages(
		array $languages
	);

	abstract public function setSetLanguageAsIndex(
		bool $setLanguageAsIndex
	);

	abstract public static function isSeqArray(
		 $array
	);

	abstract public function getDependencies(
	):array;

}