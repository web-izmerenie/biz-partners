<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

foreach ($arResult['ITEMS'] as $k => $arItem){
	$val_element = $arItem['DISPLAY_PROPERTIES']['ATT_ICON']['VALUE'];
	$file = CFile::GetFileArray($arItem['DISPLAY_PROPERTIES']['ATT_ICON']
		['LINK_ELEMENT_VALUE'][$val_element]['PREVIEW_PICTURE']);

	$arResult['ITEMS'][$k]['ICON'] = $file;
}
