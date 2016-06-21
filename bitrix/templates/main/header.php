<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$tplPath = $APPLICATION->GetTemplatePath();
global $tplPath;
$uri = $APPLICATION->GetCurUri();

$mainClass = array();

if(defined("ERROR_404"))
	$mainClass[] = "not-found";
if(defined("MAIN"))
	$mainClass[] = "main-page";
if(defined("CATALOG"))
	$mainClass[] = "catalog";
if(defined("CATALOG_SECTION"))
	$mainClass[] = "catalog-section";
if(defined("CATALOG_DETAIL"))
	$mainClass[] = "catalog-detail";
if(defined("CONTACTS"))
	$mainClass[] = "contacts";
if(defined("ABOUT"))
	$mainClass[] = "about";
if(defined("CHANGE"))
	$mainClass[] = "change-legislation";
if(defined("NEWS"))
	$mainClass[] = "news";
if(defined("CHANGE_ITEM"))
	$mainClass[] = "change-item";
if(defined("NEWS_ITEM"))
	$mainClass[] = "news-item";
if(defined("NEWS_PAGE"))
	$htmlClass[] = "news-page";

$mainClass = implode(" ", $mainClass);
$htmlClass = implode(" ", $htmlClass);
?>
<!DOCTYPE html>
<html lang="ru" class="<?=$htmlClass?>">
	<head>
		<title><?$APPLICATION->ShowTitle()?></title>
		<meta charset="utf-8">
		<meta name="viewport" content-width="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<?$APPLICATION->ShowHead();?>
		<link rel="stylesheet" href="<?=$tplPath;?>/styles/build/build.css">
		<script type="text/javascript" src="<?=$tplPath;?>/scripts/build/build.js"></script>
	</head>
	<body>
		<?$APPLICATION->ShowPanel();?>
		<header>
			<div class="wrapper">
				<div id="logo" class="column">
					<?if($uri == "/" || $uri == "/index.php"){?>
						<div class="logo"></div>
					<?}else{?>
						<a href="/" class="logo"></a>
					<?}?>
				</div>
				<!--noindex-->
				<?
					$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main_menu",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "main_menu",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					),
					false
					);?>
				<!--/noindex-->
				<div id="contacts" class="column">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.detail",
						"header_tel_present",
						array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_ELEMENT_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"BROWSER_TITLE" => "-",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"COMPONENT_TEMPLATE" => "header_tel_present",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"ELEMENT_CODE" => "",
							"ELEMENT_ID" => "1",
							"FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "content",
							"IBLOCK_URL" => "",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"MESSAGE_404" => "",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Страница",
							"PROPERTY_CODE" => array(
								0 => "",
								1 => "ATT_FILE",
							),
							"SET_BROWSER_TITLE" => "N",
							"SET_CANONICAL_URL" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"USE_PERMISSIONS" => "N",
							"USE_SHARE" => "N"
						),
						false
					);?>
					<span class="callme">
						<a href="#callme" class="call-window">Заказать звонок</a>
					</span>
					<span class="writeme">
						<a href="#writeme" class="call-window">Написать нам</a>
					</span>
				</div>
			</div>
		</header>
		<main class="content <?=$mainClass;?>">
			<?if(!defined('NO_WRAP')){?>
				<div class="wrapper">
					<h1><?$APPLICATION->ShowTitle(false)?></h1>
			<?}?>
