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
$GLOBALS['SECTION_ID'] = $arResult['SECTION']['PATH'][0]['ID'];
?>
<section class="items">
	<div class="wrapper">
		<?foreach($arResult['ITEMS'] as $arItem){?>
			<article>
				<div class="date"><?=$arItem['DISPLAY_ACTIVE_FROM'];?></div>
				<div class="text">
					<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
					<p>
						<?if(!empty($arItem['PROPERTIES']['ATT_LAW']['~VALUE']['TEXT'])){?>
							<span><?=$arItem['PROPERTIES']['ATT_LAW']['~VALUE']['TEXT']?></span>
						<?}?>
						<?=$arItem['PREVIEW_TEXT'];?>
					</p>
				</div>
			</article>
		<?}?>
	</div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]){?>
		<?=$arResult["NAV_STRING"]?>
	<?}?>
</section>
