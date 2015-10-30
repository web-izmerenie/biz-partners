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
<h2><?=$arResult['NAME'];?></h2>
<?foreach($arResult['ITEMS'] as $arItem){?>
	<p class="date"><?=$arItem['DISPLAY_ACTIVE_FROM'];?></p>
	<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
	<div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
<?}?>
<?if($arResult['CODE'] == 'news'){?>
	<a href="<?=$arResult['LIST_PAGE_URL'];?>" class="news-link">Все новости</a>
<?}?>
