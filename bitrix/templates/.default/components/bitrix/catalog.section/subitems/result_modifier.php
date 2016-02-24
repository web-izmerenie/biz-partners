<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as $k => $arItem){
	if($arItem['CODE'] == $_REQUEST['subitem'])
		$arResult['ITEMS'][$k]['ACTIVE_CLASS'] = "Y";
}
