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

if($arResult['PROPERTIES']['ATT_TEMPLATE']['VALUE_XML_ID'] == "standart"
|| empty($arResult['PROPERTIES']['ATT_TEMPLATE']['VALUE_XML_ID'])){
	require($_SERVER['DOCUMENT_ROOT'].$templateFolder."/standart_tpl.php");
}else{
	require($_SERVER['DOCUMENT_ROOT'].$templateFolder."/new_tpl.php");
}
