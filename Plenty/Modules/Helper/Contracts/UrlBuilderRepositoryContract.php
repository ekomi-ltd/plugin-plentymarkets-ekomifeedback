<?php
namespace Plenty\Modules\Helper\Contracts;


/**
 * Repository Contract for UrlBuilder
 */
interface UrlBuilderRepositoryContract 
{

	const SIZE_MIDDLE = 'middle';

	const SIZE_PREVIEW = 'preview';

	const SIZE_SECOND_PREVIEW = 'secondPreview';

	const SIZE_NORMAL = 'normal';

	public function getImageUrl(
		string $path, 
		int $plentyId = null, 
		string $size = "", 
		string $fileType = "", 
		bool $isExternalImage = false
	):string;

	public function getItemUrl(
		int $itemId, 
		int $plentyId, 
		string $urlContent = "", 
		string $lang = "de", 
		bool $useHttpsDomain = true
	):string;

}