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
			<li><?=$arList['TEXT'];?></li>
		<?}?>
	</ul>
</div>
<h2>Вам необходимы наши услуги, если вы:</h2>
<ol>
	<?foreach($arResult['PROPERTIES']['ATT_NUMBER_LIST_NO_TABS']['~VALUE'] as $arNumb){?>
		<li><?=$arNumb['TEXT'];?></li>
	<?}?>
</ol>
<div class="tabs visible">
	<div class="text"><?=$arResult['PROPERTIES']['ATT_DESC']['~VALUE']['TEXT'];?></div>
	<div class="row">
		<div id="price" class="column">
			<?=$arResult['PROPERTIES']['ATT_TEXT_BOX']['~VALUE']['TEXT'];?>
		</div>
		<div id="tel" class="column"><span>Узнать подробности по телефону:</span>
			<p><?=$arResult['PROPERTIES']['ATT_TEL']['VALUE']?></p>
		</div>
	</div>
</div>
