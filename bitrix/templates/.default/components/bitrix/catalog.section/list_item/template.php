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
$GLOBALS['ID_CHOISE'] = $arResult['UF_CHOISE'];
?>
<section class="title">
	<div class="wrapper">
		<h1><?=$arResult['NAME'];?></h1>
		<div class="text"><?=$arResult['DESCRIPTION'];?></div>
	</div>
</section>
<section class="items">
	<div class="wrapper">
		<p>Выберите вашу услугу</p>
		<?foreach($arResult['ITEMS'] as $arItem){?>
			<div class="item">
				<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
					<?=$arItem['NAME'];?>
				</a>
				<div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
			</div>
		<?}?>
		</div>
	</div>
</section>
