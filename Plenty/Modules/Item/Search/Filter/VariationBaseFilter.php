<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchAutoCompleteFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * foo
 */
abstract class VariationBaseFilter implements TypeInterface

{

	abstract public function hasNumber(
		string $number, 
		string $precision
	);

	abstract public function isActive(
	);

	abstract public function isInactive(
	);

	abstract public function hasId(
		int $id
	);

	abstract public function hasIds(
		array $ids
	);

	abstract public function hasItemId(
		int $itemId
	);

	abstract public function hasItemIds(
		array $itemIds
	);

	abstract public function isMain(
	);

	abstract public function isChild(
	);

	abstract public function isSalable(
		bool $bool = true
	);

	abstract public function isSalableAndActive(
		bool $bool = true
	);

	abstract public function isHiddenInCategoryList(
		 $bool = true
	);

	abstract public function hasADescriptionInLanguage(
		string $language
	);

	abstract public function hasAnImageOrItemHasAnImage(
	);

	abstract public function hasAnImage(
	);

	abstract public function hasManufacturer(
		int $manufacturerId
	);

	abstract public function hasSupplier(
		int $supplierId
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}