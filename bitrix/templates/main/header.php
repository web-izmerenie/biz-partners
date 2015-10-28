<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$tplPath = $APPLICATION->GetTemplatePath();
$dir = $APPLICATION->GetCurDir();
global $tplPath;
?>
<!DOCTYPE html>
<html lang="ru">
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
					<?if($dir == "/"){?>
						<div class="logo"></div>
					<?}else{?>
						<a href="/" class="logo"></a>
					<?}?>
				</div>
				<?$APPLICATION->IncludeComponent(
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
				<div id="contacts" class="column">
					<div class="figure"><a href="tel:+79150070775">+7 (915) 007-07-75</a><a href="#present">Презентация</a></div><span class="callme"><a href="#callme" class="call-window">Заказать звонок</a></span><span class="writeme"><a href="#writeme" class="call-window">Написать нам</a></span>
				</div>
			</div>
		</header>
		<main class="content main-page">
