<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * foo
 */
abstract class TextFilter implements TypeInterface

{

	const FILTER_ANY_NAME = 'hasAny';

	const FILTER_NAME_1 = 'hasName1';

	const FILTER_NAME_2 = 'hasName2';

	const FILTER_NAME_3 = 'hasName3';

	const LANG_DE = 'german';

	const LANG_FR = 'french';

	const LANG_EN = 'english';

	abstract public function hasAnyName(
	);

	abstract public function hasNameInLanguage(
		string $lang = self::LANG_DE, 
		string $filter = self::FILTER_ANY_NAME
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}