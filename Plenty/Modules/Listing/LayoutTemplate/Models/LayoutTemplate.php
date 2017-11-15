<?php
namespace Plenty\Modules\Listing\LayoutTemplate\Models;


/**
 * The layout template model.
 */
abstract class LayoutTemplate 
{

	const APPENDIX_STANDARD = 'standard';

	const APPENDIX_WITH_PRIVACY_POLICY = 'withPrivacyPolicy';

	const APPENDIX_WITHOUT_LOGO = 'withoutLogo';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$css;
	public		$htmlStructure;
	public		$mainFrame;
	public		$additionalContent;
	public		$appendixType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}