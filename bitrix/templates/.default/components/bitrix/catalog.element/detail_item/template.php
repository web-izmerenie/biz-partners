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
$GLOBALS['ID_CHOISE'] = $arResult['PROPERTIES']['ATT_CHOISE']['VALUE'];?>

<section class="title">
	<div class="wrapper">
		<h1><?=$arResult['NAME'];?></h1>
		<div class="text"><?=$arResult['PREVIEW_TEXT'];?></div>
	</div>
</section>

<section class="description">
	<div class="wrapper">
		<?if($arResult['PROPERTIES']['ATT_TPL']['VALUE_XML_ID'] == 'NO_TAB'){
			require($_SERVER['DOCUMENT_ROOT'].$templateFolder.'/tpl_default.php');
		}else{
			require($_SERVER['DOCUMENT_ROOT'].$templateFolder.'/tpl_tabs.php');
		}?>
	</div>
</section>
