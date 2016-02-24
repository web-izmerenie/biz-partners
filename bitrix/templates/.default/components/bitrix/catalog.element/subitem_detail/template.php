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
$this->setFrameMode(true);?>
<section class="title">
	<div class="wrapper">
		<h1><?=$arResult['NAME'];?></h1>
		<div class="text"><?=$arResult['PREVIEW_TEXT'];?></div>
	</div>
</section>
<section class="subitem_description">
	<div class="wrapper">
		<?=$arResult['DETAIL_TEXT'];?>

		<?if($arResult['PROPERTIES']['ATT_TEXT']['~VALUE']['TEXT']){?>
			<div class="tabs visible">
				<div class="row">
					<div id="price" class="column">
						<?=$arResult['PROPERTIES']['ATT_TEXT']['~VALUE']['TEXT'];?>
					</div>
					<div id="tel" class="column"><span>Узнать подробности по телефону:</span>
						<p><?=$arResult['PROPERTIES']['ATT_TEL']['VALUE']?></p>
					</div>
				</div>
			</div>
		<?}?>
	</div>
</section>
