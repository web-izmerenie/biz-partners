<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$arSelect = Array("NAME", "DETAIL_TEXT", "PROPERTY_TITLE");
$arFilter = Array(
	"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
	"ACTIVE"=>"Y",
	"NAME"=>$arParams['ELEMENT_LINK']
);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
	$arResult = $ob->GetFields();
}
if($arResult['PROPERTY_TITLE_VALUE'])
	$APPLICATION->SetPageProperty('title', $arResult['PROPERTY_TITLE_VALUE']);
?>
<?if($arResult['DETAIL_TEXT']){?>
	<section class="additional-text">
		<div class="wrapper">
			<?=$arResult['DETAIL_TEXT'];?>
		</div>
	</section>
<?}?>
