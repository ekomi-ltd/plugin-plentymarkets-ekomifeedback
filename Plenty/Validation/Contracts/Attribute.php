<?php
namespace Plenty\Validation\Contracts;


/**
 * Attribute Interface
 */
interface Attribute 
{

	public function getAttributeName(
	):string;

	public function setAttributeName(
		string $attributeName
	):self;

	/**
	 * The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
	 */
	public function accepted(
	):self;

	/**
	 * Add custom Role
	 */
	public function customRule(
		string $rule, 
		array $params
	):self;

	/**
	 * The field under validation must be a valid URL according to the checkdnsrr PHP function.
	 */
	public function activeUrl(
	):self;

	/**
	 * The field under validation must be a value after a given date. The dates will be passed into the strtotime PHP function. Instead of passing a date string to be evaluated by strtotime, you may specify another field to compare against the date
	 */
	public function dateAfter(
		string $fieldNameOrTimeStr
	):self;

	/**
	 * The field under validation must be entirely alphabetic characters.
	 */
	public function alphabetic(
	):self;

	/**
	 * The field under validation may have alpha-numeric characters, as well as dashes and underscores.
	 */
	public function alphaDash(
	):self;

	/**
	 * The field under validation must be entirely alpha-numeric characters.
	 */
	public function alphaNum(
	):self;

	/**
	 * The field under validation must be a PHP array.
	 */
	public function isArray(
	):self;

	/**
	 * The field under validation must be a value preceding the given date. The dates will be passed into the PHP strtotime function.
	 */
	public function dateBefore(
		string $fieldNameOrTimeStr
	):self;

	/**
	 * The field under validation must have a size between the given min and max. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function between(
		int $min, 
		int $max
	):self;

	/**
	 * The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and "0".
	 */
	public function boolean(
	):self;

	/**
	 * The field under validation must have a matching field of foo_confirmation. For example, if the field under validation is password, a matching password_confirmation field must be present in the input.
	 */
	public function confirmed(
	):self;

	/**
	 * The field under validation must be a valid date according to the strtotime PHP function.
	 */
	public function date(
	):self;

	/**
	 * The field under validation must match the given format. The format will be evaluated using the PHP date_parse_from_format function. You should use either date or date_format when validating a field, not both.
	 */
	public function dateFormat(
		string $format
	):self;

	/**
	 * The field under validation must be a valid w3c formated date time string.
	 */
	public function dateW3C(
		bool $allowTimestamps = false
	):self;

	/**
	 * The field under validation must be a valid plentyId.
	 */
	public function validPlentyId(
	):self;

	/**
	 * The field under validation must have the type specified in the database.
	 */
	public function typeFromDb(
		string $table, 
		string $column, 
		string $attribute, 
		string $comparisonKey = "id"
	):self;

	/**
	 * The field under validation must be a valid data type used by the validation rule 'typeFromDb'.
	 */
	public function validDbType(
	):self;

	/**
	 * The field under validation must be a valid currency string (e.g. 'EUR').
	 */
	public function validCurrency(
	):self;

	/**
	 * The field under validation must have a different value than field.
	 */
	public function different(
		string $fieldName
	):self;

	/**
	 * The field under validation must be numeric and must have an exact length of $count.
	 */
	public function digits(
		int $count
	):self;

	/**
	 * The field under validation must have a length between the given min and max.
	 */
	public function digitsBetween(
		int $min, 
		int $max
	):self;

	/**
	 * The field under validation must be formatted as an e-mail address.
	 */
	public function email(
	):self;

	/**
	 * The field under validation must exist on a given database table.
	 */
	public function exists(
		string $table, 
		array $columns = []
	):self;

	/**
	 * The file under validation must be an image (jpeg, png, bmp, gif, or svg)
	 */
	public function image(
	):self;

	/**
	 * The field under validation must be included in the given list of values.
	 */
	public function in(
		array $values
	):self;

	/**
	 * The field under validation must be an integer.
	 */
	public function integer(
	):self;

	/**
	 * The field under validation must be an IP address.
	 */
	public function ip(
	):self;

	/**
	 * The field under validation must a valid JSON string.
	 */
	public function json(
	):self;

	/**
	 * The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function max(
		int $value
	):self;

	/**
	 * The file under validation must have a MIME type corresponding to one of the listed extensions.
	 */
	public function mimeTypes(
		array $types
	):self;

	/**
	 * The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function min(
		int $value
	):self;

	/**
	 * The field under validation must not be included in the given list of values.
	 */
	public function notIn(
		 $values
	):self;

	/**
	 * The field under validation must be numeric.
	 */
	public function numeric(
	):self;

	/**
	 * The field under validation must match the given regular expression.
	 */
	public function regex(
		string $pattern
	):self;

	/**
	 * The field under validation must be present in the input data and not empty. A field is considered "empty" is one of the following conditions are true: The value is null. The value is an empty string. The value is an empty array or empty Countable object. The value is an uploaded file with no path.
	 */
	public function required(
	):self;

	/**
	 * The field under validation must be present if the anotherfield field is equal to any value.
	 */
	public function requiredIf(
		string $fieldName, 
		 $value
	):self;

	/**
	 * The field under validation must be present unless the anotherfield field is equal to any value.
	 */
	public function requiredUnless(
		string $fieldName, 
		string $value
	):self;

	/**
	 * The field under validation must be present only if any of the other specified fields are present.
	 */
	public function requiredWith(
		array $fieldNames
	):self;

	/**
	 * required_with_all
	 */
	public function requiredWithAll(
		array $fieldNames
	):self;

	/**
	 * The field under validation must be present only when any of the other specified fields are not present.
	 */
	public function requiredWithout(
		array $fieldNames
	):self;

	/**
	 * The field under validation must be present only when all of the other specified fields are not present.
	 */
	public function requiredWithoutAll(
		array $fieldNames
	):self;

	/**
	 * The given field must match the field under validation.
	 */
	public function same(
		string $fieldName
	):self;

	/**
	 * The field under validation must have a size matching the given value. For string data, value corresponds to the number of characters. For numeric data, value corresponds to a given integer value. For files, size corresponds to the file size in kilobytes.
	 */
	public function size(
		int $value
	):self;

	/**
	 * The field under validation must be a string.
	 */
	public function string(
	):self;

	/**
	 * The field under validation must be a valid timezone identifier according to the timezone_identifiers_list PHP function.
	 */
	public function timezone(
	):self;

	/**
	 * The field under validation must be unique on a given database table. If the column option is not specified, the field name will be used.
	 */
	public function unique(
		string $table, 
		string $column, 
		string $except = null, 
		string $idColumn = null
	):self;

	/**
	 * The field under validation must be a valid URL according to PHP's filter_var function.
	 */
	public function url(
	):self;

	/**
	 * In some situations, you may wish to run validation checks against a field only if that field is present in the input array. To quickly accomplish this, add the sometimes rule.
	 */
	public function sometimes(
	):self;

	/**
	 * The field under validation may be null. This is particularly useful when validating primitive such as strings and integers that can contain null values.
	 */
	public function nullable(
	):self;

}