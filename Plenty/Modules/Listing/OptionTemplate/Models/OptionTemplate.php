<?php
namespace Plenty\Modules\Listing\OptionTemplate\Models;


/**
 * The option template model.
 */
abstract class OptionTemplate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$listing;
	public		$listingMarket;
	public		$marketOptions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}