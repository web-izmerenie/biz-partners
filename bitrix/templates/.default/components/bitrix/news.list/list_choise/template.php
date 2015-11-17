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
<section class="choise-right">
	<div class="wrapper">
		<h1><?=$arResult['SECTION']['PATH'][0]['DESCRIPTION'];?></h1>
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){
				$icon = CFile::ResizeImageGet($arItem['ICON'],
					array('width'=>66, 'height'=>54), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li>
					<div class="img">
						<img src="<?=$icon['src'];?>">
					</div>
					<p><?=$arItem['NAME'];?></p>
					<div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
				</li>
			<?}?>
		</ul>
	</div>
</section>
