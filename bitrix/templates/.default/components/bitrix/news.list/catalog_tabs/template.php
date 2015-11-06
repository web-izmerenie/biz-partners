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
<div class="services">
	<p>Выберите вашу услугу</p>
	<ul>
		<?foreach($arResult['ITEMS'] as $k => $arNav){?>
			<li>
				<a href="#service-<?=$arNav['ID'];?>" <?if($k == 0){?>class="active"<?}?>>
					<?=$arNav['NAME'];?>
				</a>
			</li>
		<?}?>
	</ul>
	<?foreach($arResult['ITEMS'] as $k => $arItem){?>
		<div id="service-<?=$arItem['ID']?>" class="tabs <?if($k == 0){?>active<?}?>">
			<div class="text"><?=$arItem['PREVIEW_TEXT']?></div>
			<div class="row">
				<div id="price" class="column">
					<p><?=$arItem['DETAIL_TEXT']?></p>
					<?if(!empty($arItem['PROPERTIES']['ATT_FILE']['DESCRIPTION'])){?>
						<div class="file">
							<span>Подробно об услуге и стоимости:</span>
							<a href="<?=$arItem['DISPLAY_PROPERTIES']['ATT_FILE']['FILE_VALUE']['SRC'];?>">
								<?=$arItem['PROPERTIES']['ATT_FILE']['DESCRIPTION'];?>
							</a>
						</div>
					<?}?>
				</div>
				<div id="tel" class="column"><span>Узнать подробности по телефону:</span>
					<p><?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'];?></p>
				</div>
			</div>
		</div>
<?}?>
</div>
