<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>
<footer>
	<div class="wrapper">
		<div id="copy" class="column">© Biz Partners, 2001-2015
			<p>
				<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	".default", 
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
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "2",
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
			1 => "",
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
			</p>
		</div>
		<div id="footer-menu" class="column">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	),
	false
);?>
			<ul>
				<li>Каталог услуг</li>
				<li><a href="#">Бухгалтерский и налоговыйучет</a></li>
				<li><a href="#">Корпоративные юридические услуги</a></li>
				<li><a href="#">Кадровое законодательство</a></li>
				<li><a href="#">Аудит</a></li>
				<li><a href="#">Дополнительные услуги</a></li>
				<li><a href="#">Подбор персонала</a></li>
				<li><a href="#">Услуги для физических лиц</a></li>
			</ul>
		</div>
		<div id="developer" class="column"><a href="http://web-izmerenie.ru/">сделано в</a></div>
	</div>
</footer>
<div class="overlay"></div>
<div id="callme" class="module-window">
	<div class="title"><img src="../bitrix/templates/main/img/green-call.png">
		<p>Заказать звонок</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="Телефон" class="require">
		<input type="text" name="name" placeholder="Удобное для вас время" class="require">
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>«Спасибо за заявку.<br>
				Мы свяжемся с вами
				в течение часа».

			</p>
		</div>
	</form>
</div>
<div id="writeme" class="module-window">
	<div class="title"><img src="../bitrix/templates/main/img/green-mail.png">
		<p>Написать нам</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="E-mail" class="require">
		<input type="text" name="name" placeholder="Телефон" class="require">
		<textarea name="text" placeholder="Текст письма" class="require"></textarea>
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>
				Спасибо за ваше
				сообщение.<br>
				Мы рассмотрим
				и свяжемся с вами.

			</p>
		</div>
	</form>
</div>
<div id="rss" class="module-window">
	<div class="title"><img src="../bitrix/templates/main/img/green-mail.png">
		<p>Подписаться на рассылку</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="E-mail" class="require">
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>Спасибо.<br>
				Вы подписаны<br>
				на рассылку.
			</p>
		</div>
	</form>
</div>
</body>
</html>
