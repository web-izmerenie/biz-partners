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
if(empty($arResult['SECTION']['PATH']))
	$backLink = $arResult['LIST_PAGE_URL'];
else
	$backLink = $arResult['SECTION']['PATH'][0]['SECTION_PAGE_URL'];
?>
<article>
	<div class="wrapper">
		<p class="date"><?=$arResult['DISPLAY_ACTIVE_FROM'];?></p>
		<h1><?=$arResult['NAME'];?></h1>
		<div class="text">
			<span><?=$arResult['PROPERTIES']['ATT_LAW']['~VALUE']['TEXT'];?></span>
			<?=$arResult['DETAIL_TEXT'];?>
		</div>
		<div class="bottom-article">
			<a href="<?=$backLink?>" class="back"><?=$arParams['BACK_LINK'];?></a>
			<?if(!empty($arResult['PROPERTIES']['ATT_LINK']['VALUE'])){?>
				<div class="source">
					Источник:
					<a href="<?=$arResult['PROPERTIES']['ATT_LINK']['VALUE']?>" target="_blank">
						<?if(!empty($arResult['PROPERTIES']['ATT_LINK']['DESCRIPTION'])){
							print $arResult['PROPERTIES']['ATT_LINK']['DESCRIPTION'];
						}else{
							print $arResult['PROPERTIES']['ATT_LINK']['VALUE'];
						}?>
					</a>
				</div>
			<?}?>
		</div>
	</div>
</article>
