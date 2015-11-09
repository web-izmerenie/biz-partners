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
<?foreach($arResult['ITEMS'] as $arItem){?>
	<ul>
		<li><span>Телефон:</span>
			<p><?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'];?></p>
		</li>
		<li><span>Адрес:</span>
			<p><?=$arItem['PROPERTIES']['ATT_ADRES']['~VALUE']['TEXT'];?></p>
		</li>
		<li><span>Время работы компании:</span>
			<p><?=$arItem['PROPERTIES']['ATT_WORKS']['VALUE'];?></p>
		</li>
		<li><span>E-mail:</span>
			<p><?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE'];?></p>
		</li>
	</ul>
	</div>
	<div id="map" class="map">
		<?=$arItem['PROPERTIES']['ATT_MAP']['~VALUE']['TEXT'];?>
	</div>
<?}?>
