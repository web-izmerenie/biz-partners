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
?>
<div class="figure">
	<a href="tel:<?=$arResult['DETAIL_TEXT'];?>"><?=$arResult['DETAIL_TEXT'];?></a>
	<a href="<?=$arResult['FILE']['SRC'];?>">Презентация</a>
</div>
