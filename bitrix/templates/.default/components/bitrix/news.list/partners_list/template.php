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
<section class="main-partners">
	<div class="wrapper">
		<h1>Партнеры компании «Бизнес Партнерс»</h1>
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){
				$foto = CFile::ResizeImageGet(
					$arItem['PREVIEW_PICTURE'],
					array('width'=>241, 'height'=>42),
					BX_RESIZE_IMAGE_PROPORTIONAL,
					true
				);?>
				<li>
					<img src="<?=$foto['src'];?>">
				</li>
			<?}?>
		</ul>
	</div>
</section>
