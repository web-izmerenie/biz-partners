<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach($arResult['SECTIONS'] as $k => $arSection){
	$arResult['SECTIONS'][$k]['HOVER_PICTURE'] = CFile::GetFileArray($arSection['DETAIL_PICTURE']);
}
