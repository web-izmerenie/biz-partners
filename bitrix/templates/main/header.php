<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$tplPath = $APPLICATION->GetTemplatePath();
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
          <div class="logo"></div>
        </div>
        <div id="menu" class="column">
          <nav>
            <ul>
              <li><a href="#">О компании</a></li>
              <li><a href="#">Каталог услуг</a>
                <ul class="animated">
                  <li><a href="#" class="active">Бухгалтерский и налоговый учет</a></li>
                  <li><a href="#">Корпоративные юридические услуги</a></li>
                  <li><a href="#">Кадровое делопроизводство</a></li>
                  <li><a href="#">Аудит</a></li>
                  <li><a href="#">Безопасность труда на производстве</a></li>
                  <li><a href="#">Подбор персонала</a></li>
                  <li><a href="#">Услуги для физических лиц</a></li>
                </ul>
              </li>
              <li><a href="#">Изменения в законодательстве</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </nav>
        </div>
        <div id="contacts" class="column">
          <div class="figure"><a href="tel:+79150070775">+7 (915) 007-07-75</a><a href="#present">Презентация</a></div><span class="callme"><a href="#callme" class="call-window">Заказать звонок</a></span><span class="writeme"><a href="#writeme" class="call-window">Написать нам</a></span>
        </div>
      </div>
    </header>
    <main class="content main-page">
