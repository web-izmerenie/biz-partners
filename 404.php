<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");?>

<div class="wrapper">
	<h1>Такой страницы больше нет.</h1>
	<p> Перейдите, пожалуйста, в один из разделов: </p>
	<nav>
		<ul>
			<li><a href="#">Каталог услуг</a></li>
			<li><a href="#">Главная </a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
	</nav>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
