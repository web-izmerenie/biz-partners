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
<div class="complete-service">
	<h2>Услуга включает в себя:</h2>
	<ul>
		<?foreach($arResult['PROPERTIES']['ATT_INCLUDE_SRVICES']['~VALUE'] as $arList){?>
			<li>
				<div class="container">
					<?=$arList['TEXT'];?>
				</div>
			</li>
		<?}?>
	</ul>
</div>
<h2>Вам необходимы наши услуги, если:</h2>
<ol>
	<?foreach($arResult['PROPERTIES']['ATT_NUMBER_LIST_NO_TABS']['~VALUE'] as $arNumb){?>
		<li>
			<div class="container">
				<?=$arNumb['TEXT'];?>
			</div>
		</li>
	<?}?>
</ol>
<div class="tabs visible">
	<div class="text"><?=$arResult['PROPERTIES']['ATT_DESC']['~VALUE']['TEXT'];?></div>
	<div class="row">
		<div id="price" class="column">
			<?=$arResult['PROPERTIES']['ATT_TEXT_BOX']['~VALUE']['TEXT'];?>
			<?if(!empty($arResult['PROPERTIES']['ATT_FILE']['DESCRIPTION'])){?>
				<div class="file">
					<span>Подробно об услуге и стоимости:</span>
					<a href="<?=$arResult['DISPLAY_PROPERTIES']['ATT_FILE']['FILE_VALUE']['SRC'];?>" target="_blank">
						<?=$arResult['PROPERTIES']['ATT_FILE']['DESCRIPTION'];?>
					</a>
				</div>
			<?}?>
		</div>
		<div id="tel" class="column"><span>Узнать подробности по телефону:</span>
			<p><?=$arResult['PROPERTIES']['ATT_TEL']['VALUE']?></p>
		</div>
	</div>
</div>
