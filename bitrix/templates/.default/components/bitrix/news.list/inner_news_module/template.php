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
<section class="news-module">
	<div class="wrapper">
		<h1><?=$arResult['NAME'];?></h1>
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){?>
				<li>
					<time><?=$arItem['DISPLAY_ACTIVE_FROM'];?></time>
					<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
					<div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
				</li>
			<?}?>
		</ul>
	</div>
</section>
